<?php
declare(strict_types=1);


namespace RWC\HotPads\Translator;


use DOMDocument;
use DOMElement;
use InvalidArgumentException;
use RWC\HotPads\Company;
use RWC\HotPads\IndividualProperty;
use RWC\HotPads\IProperty;
use RWC\HotPads\Property\OpenHouse;
use RWC\HotPads\Property\Restrictions;

class XmlTranslator
{
    /**
     * Converts a collection of Companies and Properties into a HotPads XML
     * feed.
     *
     * @param Company[] $companies The Companies to add.
     * @param IProperty[] $properties The properties to convert.
     * @return DOMDocument
     */
    public function toHotPadsXml(array $companies, array $properties) : DOMDocument
    {
        $document = new DOMDocument();
        $root = $document->createElement('hotPadsItems');
        $root->setAttribute('version', '2.1');

        foreach ($companies as $company) {
            $root->appendChild($this->companyToDOMElement($document, $company));
        }

        foreach ($properties as $property) {
            $root->appendChild($this->propertyToDOMElement($document, $property));
        }

        $document->appendChild($root);
        return $document;
    }

    /**
     * Converts the specified Company to a Company DOMElement based on the
     * HotPads Rental Listings Feed Format.
     *
     * @param DOMDocument $document The DOM Document used for conversion.
     * @param Company $company The Company to convert.
     * @return DOMElement Returns the created DOMElement.
     */
    private function companyToDOMElement(DOMDocument $document, Company $company) : DOMElement
    {
        $element = $document->createElement('Company');
        $element->setAttribute('id', $company->getId());

        // Validate requirements
        if (empty($company->getCity())) {
            throw new InvalidArgumentException('Company city is required.');
        }

        if (empty($company->getState())) {
            throw new InvalidArgumentException('Company state is required.');
        }

        if (empty($company->getCompanyLogo())) {
            throw new InvalidArgumentException('Company logo is required.');
        }

        if (! empty($company->getName())) {
            $element->appendChild($document->createElement('name', $company->getName()));
        }

        if (! empty($company->getWebsite())) {
            $element->appendChild($document->createElement('website', $company->getWebsite()));
        }

        $element->appendChild($document->createElement('city', $company->getCity()));
        $element->appendchild($document->createElement('state', $company->getState()));

        $logoElement = $document->createElement('CompanyLogo');
        $logoElement->setAttribute('source', $company->getCompanyLogo());
        $element->appendChild($logoElement);

        return $element;
    }

    /**
     * Converts the specified Property to a Listing element based on the
     * HotPads Rental Listings Feed Format.
     *
     * @param DOMDocument $document The Document used for conversion.
     * @param IProperty $property The Property to convert.
     * @return DOMElement Returns the converted DOMElement.
     */
    private function propertyToDOMElement(DOMDocument $document, IProperty $property) : DOMElement
    {
        if ($property instanceof IndividualProperty) {
            return $this->individualPropertyToDOMEleent($document, $property);
        }

        throw new InvalidArgumentException('Cannot convert ' . get_class($property));
    }

    /**
     * Converts an IndividualProperty to a Listing DOMElement based on the
     * HotPads Rental Listings Feed Format.
     *
     * @param DOMDocument $document The DOMDocument used to create elements.
     * @param IndividualProperty $property The IndividualProperty to convert.
     * @return DOMElement Returns the Converted DOMElement.
     */
    private function individualPropertyToDOMEleent(
        DOMDocument $document,
        IndividualProperty $property
    ) : DOMElement {
        // Create the element.
        $listingElement = $document->createElement('Listing');

        // Set attributes
        $listingElement->setAttribute('id', $property->getId());
        $listingElement->setAttribute('type', $property->getListingType()->getValue());
        $listingElement->setAttribute('companyId', $property->getCompanyId());
        $listingElement->setAttribute('propertyType', $property->getPropertyType()->getValue());

        if ($property->hasRestrictions()) {
            $listingElement->appendChild($this->restrictionsToDOMElement($document, $property->getRestrictions()));
        }

        if (! empty($property->getName())) {
            $listingElement->appendChild($document->createElement('name', $property->getName()));
        }

        if (! empty($property->getUnit())) {
            $listingElement->appendChild($document->createElement('unit', $property->getUnit()));
        }

        if (empty($property->getAddress()->getAddress1())) {
            throw new InvalidArgumentException('Property street address is required.');
        }

        // Merge lines 1 and 2 of street address into a single field.
        $streetElement = $document->createElement('street',
            $property->getAddress()->getAddress1() .
                (! empty($property->getAddress()->getAddress2()) ) ?
                    ' ' . $property->getAddress()->getAddress2() :
                    ''
                );

        if ($property->getAddress()->isHideStreet()) {
            $streetElement->setAttribute('hide', 'true');
        }

        $listingElement->appendChild($streetElement);

        if (empty($property->getAddress()->getCity())) {
            throw new InvalidArgumentException('Property city is required');
        }

        $listingElement->appendChild($document->createElement('city', $property->getAddress()->getCity()));

        if (empty($property->getAddress()->getState())) {
            throw new InvalidArgumentException('Property state is required');
        }

        $listingElement->appendChild($document->createElement('state', $property->getAddress()->getState()));

        if (empty($property->getAddress()->getZipcode())) {
            throw new InvalidArgumentException('Property zipcode is required');
        }

        $listingElement->appendChild($document->createElement('zip', $property->getAddress()->getZipcode()));

        if (! empty($property->getAddress()->getCountry())) {
            $listingElement->appendChild($document->createElement('country', $property->getAddress()->getCountry()));
        }

        if ($property->hasGeolocation()) {
            $listingElement->appendChild($document->createElement('latitude', $property->getGeolocation()->getLatitude()));
            $listingElement->appendChild($document->createElement('longitude', $property->getGeolocation()->getLongitude()));
        }

        $listingElement->appendChild($document->createElement('lastUpdated', date(DATE_ISO8601, $property->getLastUpdated())));

        if (! empty($property->getContactName())) {
            $listingElement->appendChild($document->createElement('contactName', $property->getContactName()));
        }

        if (empty($property->getContactPhone()) && empty($property->getContactEmail())) {
            throw new InvalidArgumentException('Property must have either contact email or phone');
        }

        if (! empty($property->getContactEmail())) {
            $listingElement->appendChild($document->createElement('contactEmail', $property->getContactEmail()));
        }

        if (! empty($property->getContactPhone())) {
            $listingElement->appendChild($document->createElement('contactPhone', $property->getContactPhone()));
        }

        if (! empty($property->getContactFax())) {
            $listingElement->appendChild($document->createElement(
                'contactFax',
                $property->getContactFax()
            ));
        }

        if ($property->hasOpenHouses()) {
            $listingElement->appendChild($this->openHousesToDOMElement($document, $property->getOpenHouses()));
        }

        if (! empty($property->getContactTimes())) {
            $listingElement->appendChild($document->createElement('contactTimes', $property->getContactTimes()));
        }

        if (! empty($property->getContactMethodPreference())) {
            $listingElement->appendChild($document->createElement('contactMethodPreference', $property->getContactMethodPreference()));
        }


        if (! empty($property->getPreviewMessage())) {
            if(strlen($property->getPreviewMessage() > 255)) {
                throw new InvalidArgumentException(
                    'Property previewMessage must be 255 or fewer characters.'
                );
            }

            $listingElement->appendChild($document->createElement(
                'previewMessage',
                $property->getPreviewMessage()
            ));
        }

        if (! empty($property->getDescription())) {
            $listingElement->appendChild($document->createElement(
                'description',
                $property->getDescription()
            ));
        }

        if (! empty($property->getTerms())) {
            $listingElement->appendChild($document->createElement(
                'terms',
                $property->getTerms()
            ));
        }

        if (! empty($property->getLeaseTerms())) {
            $listingElement->appendChild($document->createElement(
                'leasteTerm',
                $property->getLeaseTerms()
            ));
        }

        if (! empty($property->getWebsite())) {
            if (strlen($property->getWebsite() > 255)) {
                throw new InvalidArgumentException(
                    'Property website must be 255 or fewer characters'
                );
            }

            $listingElement->appendChild($document->createElement(
                'website',
                $property->getWebsite()
            ));
        }

        if (! empty($property->getVirtualTourUrl())) {
            if (strlen($property->getVirtualTourUrl()) > 255) {
                throw new InvalidArgumentException(
                    'Property virtual tour URL must be 255 or fewer ' .
                    'characters.'
                );
            }

            $listingElement->appendChild($document->createElement(
                'virtualTourUrl',
                $property->getVirtualTourUrl()
            ));
        }

        if ($property->getisFurnished() !== null) {
            $listingElement->appendChild($this->createBooleanElement(
                $document,
                'isFurnished',
                $property->getisFurnished()
            ));
        }

        if ($property->getSmokingAllowed() !== null) {
            $listingElement->appendChild($this->createBooleanElement(
                $document,
                'smokingAllowed',
                $property->getSmokingAllowed()
            ));
        }

        if (! empty($property->getUtilityCosts()->getElectric())) {
            $listingElement->appendChild($document->createElement(
                'utilityCostElectricity',
                $property->getUtilityCosts()->getElectric()
            ));
        }

        if (! empty($property->getUtilityCosts()->getHeating())) {
            $listingElement->appendChild($document->createElement(
                'utilityCostHeating',
                $property->getUtilityCosts()->getHeating()
            ));
        }

        if (! empty($property->getUtilityCosts()->getCable())) {
            $listingElement->appendChild($document->createElement(
                'utilityCostCable',
                $property->getUtilityCosts()->getCable()
            ));
        }

        if (! empty($property->getUtilityCosts()->getWater())) {
            $listingElement->appendChild($document->createElement(
                'utilityCostWater',
                $property->getUtilityCosts()->getWater()
            ));
        }

        if (! empty($property->getUtilityCosts()->getInternet())) {
            $listingElement->appendChild($document->createElement(
                'utilityCostInternet',
                $property->getUtilityCosts()->getInternet()
            ));
        }

        if (! empty($property->getUtilityCosts()->getGarbage())) {
            $listingElement->appendChild($document->createElement(
                'utilityCostGarbage',
                $property->getUtilityCosts()->getGarbage()
            ));
        }

        if (! empty($property->getUtilityCosts()->getParking())) {
            $listingElement->appendChild($document->createElement(
                'utilityCostParking',
                $property->getUtilityCosts()->getParking()
            ));
        }

        if (! empty($property->getUtilityCosts()->getOther())) {
            $listingElement->appendChild($document->createElement(
                'utilityCostOther',
                $property->getUtilityCosts()->getOther()
            ));
        }

        if (! empty($property->getUtilityCosts()->getTotal())) {
            $listingElement->appendChild($document->createElement(
                'utilityCostTotal',
                $property->getUtilityCosts()->getTotal()
            ));
        }

        if ($property->hasListingTags()) {
            $listingTagsEl = $document->createElement('ListingTags');
            $listingElement->appendChild($listingTagsEl);

            foreach ($property->getListingTags() as $listingTag) {
                $listingTagEl = $document->createElement('ListingTag');
                $listingTagsEl->appendChild($listingTagEl);

                $listingTagEl->setAttribute('type', $listingTag->getType());
                $listingTagEl->appendChild($document->createElement(
                    'tag',
                    $listingTag->getValue()
                ));
            }
        }

        if (! empty($property->getListingPermission())) {
            $listingElement->appendChild($document->createElement(
                'listingPermission',
                $property->getListingPermission()
            ));
        }

        if ($property->hasSpecialOffers()) {
            foreach ($property->getSpecialOffers() as $specialOffer) {
                $specialOfferEl = $document->createElement('ListingSpecialOffer');
                $listingElement->appendChild($specialOfferEl);

                $specialOfferEl->appendChild($document->createElement(
                    'description',
                    $specialOffer->getDescription()
                ));

                if (! empty($specialOffer->getStartDate())) {
                    $specialOfferEl->appendChild($document->createElement(
                        'startDate',
                        date('Y-m-d', $specialOffer->getStartDate())
                    ));
                }
                if (! empty($specialOffer->getEndDate())) {
                    $specialOfferEl->appendChild($document->createElement(
                        'endDate',
                        date('Y-m-d', $specialOffer->getEndDate())
                    ));
                }

            }
        }

        if ($property->hasListingPhotos()) {
            foreach ($property->getListingPhotos() as $listingPhoto) {
                $listingPhotoEl = $document->createElement('ListingPhoto');
                $listingElement->appendChild($listingPhotoEl);

                $listingPhotoEl->setAttribute('source', $listingPhoto->getUrl());


                if (! empty($listingPhoto->getLabel())) {
                    $listingPhotoEl->appendChild($document->createElement(
                        'label',
                        $listingPhoto->getLabel()
                    ));
                }

                if (! empty($listingPhoto->getCaption())) {
                    $listingPhotoEl->appendChild($document->createElement(
                        'caption',
                        $listingPhoto->getCaption()
                    ));
                }
            }
        }

        if (empty($property->getPrice())) {
            throw new InvalidArgumentException(
                'Property must have a price.'
            );
        }

        $listingElement->appendChild($document->createElement(
            'price',
            $property->getPrice()
        ));

        if (! empty($property->getPriceFrequency())) {
            $listingElement->appendChild($document->createElement(
                'priceFrequency',
                $property->getPriceFrequency()->getValue()
            ));
        }

        if (! empty($property->getHoaFee())) {
            $listingElement->appendChild($document->createElement(
                'HOE-Fee',
                $property->getHoaFee()
            ));
        }

        if (! empty($property->getDeposit())) {
            $listingElement->appendChild($document->createElement(
                'deposit',
                $property->getDeposit()
            ));
        }

        if ( empty($property->getNumBedrooms())) {
            throw new InvalidArgumentException('Number of Bedrooms is required');
        }

        $listingElement->appendChild($document->createElement(
            'numBedrooms',
            $property->getNumBedrooms()
        ));

        if (empty($property->getNumFullBaths())) {
            throw new InvalidArgumentException('Number of Full Baths is required');
        }

        $listingElement->appendChild($document->createElement(
            'numFullBaths',
            $property->getNumFullBaths()
        ));

        if (empty($property->getNumHalfBaths())) {
            throw new InvalidArgumentException('Number of Half Baths is required');
        }

        $listingElement->appendChild($document->createElement(
            'numHalfBaths',
            $property->getNumHalfBaths()
        ));

        if (! empty($property->getSquareFeet())) {
            $listingElement->appendChild($document->createElement(
                'squareFeet',
                $property->getSquareFeet()
            ));
        }

        if (! empty($property->getDateAvailable())) {
            $listingElement->appendChild($document->createElement(
                'dateAvailable',
                date('Y-m-d', $property->getDateAvailable())
            ));
        }

        if (! empty($property->getPropertyType()))  {
            $listingElement->appendChild($document->createElement(
                'providerType',
                $property->getProviderType()->getValue()
            ));
        }

        return $listingElement;
    }

    /**
     * Converts Restrictions to a DOMElement based on the HotPads Rental Listing
     * Feed Format.
     *
     * @param DOMDocument $document The document used for element generation.
     * @param Restrictions $restrictions The Restrictions to convert.
     * @return DOMElement Returns the converted DOMElement.
     */
    private function restrictionsToDOMElement(
        DOMDocument $document,
        Restrictions $restrictions
    ) : DOMElement {
        $element = $document->createElement('restrictions');

        if ($restrictions->getSeniorHousing() !== null) {
            $element->appendChild(
                $this->createYesNoElement(
                    $document,
                    'seniorHousing',
                    $restrictions->getSeniorHousing()
                )
            );
        }

        if ($restrictions->getStudentHousing() !== null) {
            $element->appendChild(
                $this->createYesNoElement(
                    $document,
                    'studentHousing',
                    $restrictions->getStudentHousing()
                )
            );
        }

        if ($restrictions->getMilitaryHousing() !== null) {
            $element->appendChild(
                $this->createYesNoElement(
                    $document,
                    'militaryHousing',
                    $restrictions->getMilitaryHousing()
                )
            );
        }

        if ($restrictions->getDisabledHousing() !== null) {
            $element->appendChild(
                $this->createYesNoElement(
                    $document,
                    'disabledHousing',
                    $restrictions->getDisabledHousing()
                )
            );
        }

        if ($restrictions->getIncomeRestrictedHousing() !== null) {
            $element->appendChild(
                $this->createYesNoElement(
                    $document,
                    'incomeRestrictedHousing',
                    $restrictions->getIncomeRestrictedHousing()
                )
            );
        }

        $incomeRestrictions = [];

        if ($restrictions->getOnePersonHouseholdIncome() !== null) {
            $incomeRestrictions[] = $document->createElement(
                'onePersonHouseholdIncomePerMonth',
                $restrictions->getOnePersonHouseholdIncome()
            );
        }

        if ($restrictions->getTwoPersonHouseholdIncome() !== null) {
            $incomeRestrictions[] = $document->createElement(
                'twoPersonHouseholdIncomePerMonth',
                $restrictions->getTwoPersonHouseholdIncome()
            );
        }

        if ($restrictions->getThreePersonHouseholdIncome() !== null) {
            $incomeRestrictions[] = $document->createElement(
                'threePersonHouseholdIncomePerMonth',
                $restrictions->getThreePersonHouseholdIncome()
            );
        }

        if ($restrictions->getFourPersonHouseholdIncome() !== null) {
            $incomeRestrictions[] = $document->createElement(
                'fourPersonHouseholdIncomePerMonth',
                $restrictions->getFourPersonHouseholdIncome()
            );
        }

        if ($restrictions->getFivePersonHouseholdIncome() !== null) {
            $incomeRestrictions[] = $document->createElement(
                'fivePersonHouseholdIncomePerMonth',
                $restrictions->getFivePersonHouseholdIncome()
            );
        }

        if ($restrictions->getSixPersonHouseholdIncome() !== null) {
            $incomeRestrictions[] = $document->createElement(
                'sixPersonHouseholdIncomePerMonth',
                $restrictions->getSixPersonHouseholdIncome()
            );
        }

        if ($restrictions->getSevenPesonHouseholdIncome() !== null) {
            $incomeRestrictions[] = $document->createElement(
                'sevenPersonHouseholdIncomePerMonth',
                $restrictions->getSevenPesonHouseholdIncome()
            );
        }

        if ($restrictions->getEightPersonHouseholdIncome() !== null) {
            $incomeRestrictions[] = $document->createElement(
                'eightPersonHouseholdIncomePerMonth',
                $restrictions->getEightPersonHouseholdIncome()
            );
        }

        if (! empty($incomeRestrictions)) {
            $incomeRestrictionsEl = $document->createElement('incomeRestrictions');
            $element->appendChild($incomeRestrictionsEl);

            foreach($incomeRestrictions as $incomeRestriction) {
                $incomeRestrictionsEl->appendChild($incomeRestriction);
            }
        }

        return $element;
    }

    final private function createYesNoElement(DOMDocument $document, string $name, bool $value) : DOMElement
    {
        return $document->createElement($name, $value ? 'Yes' : 'No');
    }

    final private function createBooleanElement(DOMDocument $document, string $name, bool $value) : DOMElement
    {
        return $document->createElement($name, $value ? 'true' : 'false');
    }

    /**
     * Converts an array of OpenHouse objects to an openHouses element based on
     * the HotPads Rental Listings Feed Format specification.
     *
     * @param DOMDocument $document The document used for element generation.
     * @param OpenHouse[] $openHouses The OpenHouses to convert.
     * @return DOMElement Returns the converted openHouses element.
     */
    private function openHousesToDOMElement(DOMDocument $document, array $openHouses) : DOMElement
    {
        $openHousesEl = $document->createElement('openHouses');

        foreach ($openHouses as $openHouse) {
            $openHouseEl = $document->createElement('openHouse');
            $openHousesEl->appendChild($openHouseEl);

            $date  = date('Y-m-d', $openHouse->getStart());
            $start = date('h:i A', $openHouse->getStart());
            $end   = date('h:i A', $openHouse->getEnd());

            $openHouseEl->appendChild($document->createElement('date', $date));
            $openHouseEl->appendChild($document->createElement('start', $start));
            $openHouseEl->appendChild($document->createElement('end', $end));
        }

        return $openHousesEl;
    }
}
