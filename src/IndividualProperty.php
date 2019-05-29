<?php
declare(strict_types=1);

namespace RWC\HotPads;

use RWC\HotPads\Property\Address;
use RWC\HotPads\Property\Geolocation;
use RWC\HotPads\Property\IListingTag;
use RWC\HotPads\Property\IListingType;
use RWC\HotPads\Property\IPropertyType;
use RWC\HotPads\Property\ListingPhoto;
use RWC\HotPads\Property\OpenHouse;
use RWC\HotPads\Property\PriceFrequency\IPriceFrequency;
use RWC\HotPads\Property\ProviderType\IProviderType;
use RWC\HotPads\Property\Restrictions;
use RWC\HotPads\Property\SpecialOffer;
use RWC\HotPads\Property\UtilityCosts;


/**
 * A Single family home or individual apartment/condo unit (ex. houses, condos, etc.)
 *
 * @package RWC\HotPads\Property
 */
class IndividualProperty implements IProperty
{
    /**
     * The id of the listing.
     *
     * @var string
     */
    protected $id;

    /**
     * The id of the company.
     *
     * @var string
     */
    protected $companyId;

    /**
     * @var IListingType
     */
    protected $listingType;

    /**
     * @var IPropertyType
     */
    protected $propertyType;

    /**
     * Specifies if there are any income restrictions.
     *
     * @var Restrictions|null
     */
    protected $restrictions;

    /**
     * Name of the property.
     *
     * @var string
     */
    protected $name;

    /**
     * The unit number if applicable.
     *
     * @var string
     */
    protected $unit;

    /**
     * The address of the property.
     * @var Address
     */
    protected $address;

    /**
     * The latitude and longitude.
     * @var Geolocation|null
     */
    protected $geolocation;

    /**
     * The timestamp when the property was last updated.
     *
     * @var int
     */
    protected $lastUpdated;

    /**
     * The contact name.
     *
     * @var string|null
     */
    protected $contactName;

    /**
     * The contact phone number.
     *
     * @var string
     */
    protected $contactPhone;

    /**
     * The contact email address.
     *
     * @var string
     */
    protected $contactEmail;

    /**
     * The contact fax number.
     *
     * @var string
     */
    protected $contactFax;

    /**
     * One or more OpenHouses.
     *
     * @var OpenHouse[]
     */
    protected $openHouses;

    /**
     * Preferred contact times.
     *
     * @var string|null
     */
    protected $contactTimes;

    /**
     * Email, SMS, Phone, Fax
     *
     * @var string|null
     */
    protected $contactMethodPreference;

    /**
     * The preview message. 255 characters.
     *
     * @var string|null
     */
    protected $previewMessage;

    /**
     * The property description.
     *
     * @var string|null
     */
    protected $description;

    /**
     * Terms
     *
     * @var string|null
     */
    protected $terms;

    /**
     * Lease Terms: ContactForDetails,Monthly,SixMonths,OneYear
     *
     * @var string
     */
    protected $leaseTerms;

    /**
     * Website URL for listing.
     *
     * @var string|null
     */
    protected $website;

    /**
     * Virtual tour URL for listing.
     *
     * @var string|null
     */
    protected $virtualTourUrl;

    /**
     * True if furnished.
     *
     * @var bool|null
     */
    protected $isFurnished;

    /**
     * True if smoking is allowed.
     *
     * @var bool|null
     */
    protected $smokingAllowed;

    /**
     * @var UtilityCosts
     */
    protected $utilityCosts;

    /**
     * A collection of tags.
     *
     * @var IListingTag[]
     */
    protected $listingTags;

    /**
     * Email address of HotPads user account that you wish to have access to the listing.
     *
     * @var string
     */
    protected $listingPermission;

    /**
     * @var SpecialOffer[]
     */
    protected $specialOffers;

    /**
     * @var ListingPhoto[]
     */
    protected $listingPhotos;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var IPriceFrequency|null
     */
    protected $priceFrequency;

    /**
     * @var float|null
     */
    protected $hoaFee;

    /**
     * @var float|null
     */
    protected $deposit;

    /**
     * @var int
     */
    protected $numBedrooms;

    /**
     * @var int
     */
    protected $numFullBaths;

    /**
     * @var int
     */
    protected $numHalfBaths;

    /**
     * @var int|null
     */
    protected $squareFeet;

    /**
     * Timestamp when available.
     *
     * @var int|null
     */
    protected $dateAvailable;

    /**
     * @var IProviderType|null
     */
    protected $providerType;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCompanyId(): string
    {
        return $this->companyId;
    }

    /**
     * @param string $companyId
     */
    public function setCompanyId(string $companyId): void
    {
        $this->companyId = $companyId;
    }

    /**
     * @return IListingType
     */
    public function getListingType(): IListingType
    {
        return $this->listingType;
    }

    /**
     * @param IListingType $listingType
     */
    public function setListingType(IListingType $listingType): void
    {
        $this->listingType = $listingType;
    }

    /**
     * @return IPropertyType
     */
    public function getPropertyType(): IPropertyType
    {
        return $this->propertyType;
    }

    /**
     * @param IPropertyType $propertyType
     */
    public function setPropertyType(IPropertyType $propertyType): void
    {
        $this->propertyType = $propertyType;
    }

    /**
     * @return Restrictions|null
     */
    public function getRestrictions(): ?Restrictions
    {
        return $this->restrictions;
    }

    /**
     * @param Restrictions|null $restrictions
     */
    public function setRestrictions(?Restrictions $restrictions): void
    {
        $this->restrictions = $restrictions;
    }

    /**
     * Returns true if the property has restrictions.
     *
     * @return bool Returns true if the property has restrictions.
     */
    public function hasRestrictions() : bool
    {
        return $this->getRestrictions() != null;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     */
    public function setUnit(string $unit): void
    {
        $this->unit = $unit;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns true if the property has Geolocation data.
     *
     * @return bool Returns true if the property has Geolocation data.
     */
    public function hasGeolocation() : bool
    {
        return ! empty($this->geolocation);
    }

    /**
     * @return Geolocation|null
     */
    public function getGeolocation(): ?Geolocation
    {
        return $this->geolocation;
    }

    /**
     * @param Geolocation|null $geolocation
     */
    public function setGeolocation(?Geolocation $geolocation): void
    {
        $this->geolocation = $geolocation;
    }

    /**
     * @return int
     */
    public function getLastUpdated(): int
    {
        return $this->lastUpdated;
    }

    /**
     * @param int $lastUpdated
     */
    public function setLastUpdated(int $lastUpdated): void
    {
        $this->lastUpdated = $lastUpdated;
    }

    /**
     * @return string|null
     */
    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    /**
     * @param string|null $contactName
     */
    public function setContactName(?string $contactName): void
    {
        $this->contactName = $contactName;
    }

    /**
     * @return string
     */
    public function getContactPhone(): string
    {
        return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     */
    public function setContactPhone(string $contactPhone): void
    {
        $this->contactPhone = $contactPhone;
    }

    /**
     * @return string
     */
    public function getContactEmail(): string
    {
        return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     */
    public function setContactEmail(string $contactEmail): void
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * @return string
     */
    public function getContactFax(): string
    {
        return $this->contactFax;
    }

    /**
     * @param string $contactFax
     */
    public function setContactFax(string $contactFax): void
    {
        $this->contactFax = $contactFax;
    }

    /**
     * Returns true if the IndividualProperty has any Open Houses.
     *
     * @return bool Returns true if the IndividualProperty has any Open Houses.
     */
    public function hasOpenHouses() : bool
    {
        return ! empty($this->openHouses);
    }

    /**
     * @return OpenHouse[]
     */
    public function getOpenHouses(): array
    {
        return $this->openHouses;
    }

    /**
     * @param OpenHouse[] $openHouses
     */
    public function setOpenHouses(array $openHouses): void
    {
        $this->openHouses = $openHouses;
    }

    /**
     * @return string|null
     */
    public function getContactTimes(): ?string
    {
        return $this->contactTimes;
    }

    /**
     * @param string|null $contactTimes
     */
    public function setContactTimes(?string $contactTimes): void
    {
        $this->contactTimes = $contactTimes;
    }

    /**
     * @return string|null
     */
    public function getContactMethodPreference(): ?string
    {
        return $this->contactMethodPreference;
    }

    /**
     * @param string|null $contactMethodPreference
     */
    public function setContactMethodPreference(?string $contactMethodPreference): void
    {
        $this->contactMethodPreference = $contactMethodPreference;
    }

    /**
     * @return string|null
     */
    public function getPreviewMessage(): ?string
    {
        return $this->previewMessage;
    }

    /**
     * @param string|null $previewMessage
     */
    public function setPreviewMessage(?string $previewMessage): void
    {
        $this->previewMessage = $previewMessage;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getTerms(): ?string
    {
        return $this->terms;
    }

    /**
     * @param string|null $terms
     */
    public function setTerms(?string $terms): void
    {
        $this->terms = $terms;
    }

    /**
     * @return string
     */
    public function getLeaseTerms(): string
    {
        return $this->leaseTerms;
    }

    /**
     * @param string $leaseTerms
     */
    public function setLeaseTerms(string $leaseTerms): void
    {
        $this->leaseTerms = $leaseTerms;
    }

    /**
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param string|null $website
     */
    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    /**
     * @return string|null
     */
    public function getVirtualTourUrl(): ?string
    {
        return $this->virtualTourUrl;
    }

    /**
     * @param string|null $virtualTourUrl
     */
    public function setVirtualTourUrl(?string $virtualTourUrl): void
    {
        $this->virtualTourUrl = $virtualTourUrl;
    }

    /**
     * @return bool|null
     */
    public function getisFurnished(): ?bool
    {
        return $this->isFurnished;
    }

    /**
     * @param bool|null $isFurnished
     */
    public function setIsFurnished(?bool $isFurnished): void
    {
        $this->isFurnished = $isFurnished;
    }

    /**
     * @return bool|null
     */
    public function getSmokingAllowed(): ?bool
    {
        return $this->smokingAllowed;
    }

    /**
     * @param bool|null $smokingAllowed
     */
    public function setSmokingAllowed(?bool $smokingAllowed): void
    {
        $this->smokingAllowed = $smokingAllowed;
    }

    /**
     * @return UtilityCosts
     */
    public function getUtilityCosts(): UtilityCosts
    {
        return $this->utilityCosts;
    }

    /**
     * @param UtilityCosts $utilityCosts
     */
    public function setUtilityCosts(UtilityCosts $utilityCosts): void
    {
        $this->utilityCosts = $utilityCosts;
    }

    /**
     * Returns true if the property has any listing tags.
     *
     * @return bool Returns true if the property has any listing tags.
     */
    public function hasListingTags() : bool
    {
        return ! empty($this->listingTags);
    }

    /**
     * @return IListingTag[]
     */
    public function getListingTags(): array
    {
        return $this->listingTags;
    }

    /**
     * @param IListingTag[] $listingTags
     */
    public function setListingTags(array $listingTags): void
    {
        $this->listingTags = $listingTags;
    }

    /**
     * @return string
     */
    public function getListingPermission(): string
    {
        return $this->listingPermission;
    }

    /**
     * @param string $listingPermission
     */
    public function setListingPermission(string $listingPermission): void
    {
        $this->listingPermission = $listingPermission;
    }

    /**
     * Returns true if the property has special offers.
     *
     * @return bool Returns true if the property has special offers.
     */
    public function hasSpecialOffers() : bool
    {
        return ! empty($this->specialOffers);
    }

    /**
     * @return SpecialOffer[]
     */
    public function getSpecialOffers(): array
    {
        return $this->specialOffers;
    }

    /**
     * @param SpecialOffer[] $specialOffers
     */
    public function setSpecialOffers(array $specialOffers): void
    {
        $this->specialOffers = $specialOffers;
    }

    /**
     * Returns true if the Property has listing photos.
     *
     * @return bool Returns true if the Property has listing photos.
     */
    public function hasListingPhotos() : bool
    {
        return ! empty($this->listingPhotos);
    }

    /**
     * @return ListingPhoto[]
     */
    public function getListingPhotos(): array
    {
        return $this->listingPhotos;
    }

    /**
     * @param ListingPhoto[] $listingPhotos
     */
    public function setListingPhotos(array $listingPhotos): void
    {
        $this->listingPhotos = $listingPhotos;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return IPriceFrequency|null
     */
    public function getPriceFrequency(): ?IPriceFrequency
    {
        return $this->priceFrequency;
    }

    /**
     * @param IPriceFrequency|null $priceFrequency
     */
    public function setPriceFrequency(?IPriceFrequency $priceFrequency): void
    {
        $this->priceFrequency = $priceFrequency;
    }

    /**
     * @return float|null
     */
    public function getHoaFee(): ?float
    {
        return $this->hoaFee;
    }

    /**
     * @param float|null $hoaFee
     */
    public function setHoaFee(?float $hoaFee): void
    {
        $this->hoaFee = $hoaFee;
    }

    /**
     * @return float|null
     */
    public function getDeposit(): ?float
    {
        return $this->deposit;
    }

    /**
     * @param float|null $deposit
     */
    public function setDeposit(?float $deposit): void
    {
        $this->deposit = $deposit;
    }

    /**
     * @return int
     */
    public function getNumBedrooms(): int
    {
        return $this->numBedrooms;
    }

    /**
     * @param int $numBedrooms
     */
    public function setNumBedrooms(int $numBedrooms): void
    {
        $this->numBedrooms = $numBedrooms;
    }

    /**
     * @return int
     */
    public function getNumFullBaths(): int
    {
        return $this->numFullBaths;
    }

    /**
     * @param int $numFullBaths
     */
    public function setNumFullBaths(int $numFullBaths): void
    {
        $this->numFullBaths = $numFullBaths;
    }

    /**
     * @return int
     */
    public function getNumHalfBaths(): int
    {
        return $this->numHalfBaths;
    }

    /**
     * @param int $numHalfBaths
     */
    public function setNumHalfBaths(int $numHalfBaths): void
    {
        $this->numHalfBaths = $numHalfBaths;
    }

    /**
     * @return int|null
     */
    public function getSquareFeet(): ?int
    {
        return $this->squareFeet;
    }

    /**
     * @param int|null $squareFeet
     */
    public function setSquareFeet(?int $squareFeet): void
    {
        $this->squareFeet = $squareFeet;
    }

    /**
     * @return int|null
     */
    public function getDateAvailable(): ?int
    {
        return $this->dateAvailable;
    }

    /**
     * @param int|null $dateAvailable
     */
    public function setDateAvailable(?int $dateAvailable): void
    {
        $this->dateAvailable = $dateAvailable;
    }

    /**
     * @return IProviderType|null
     */
    public function getProviderType(): ?IProviderType
    {
        return $this->providerType;
    }

    /**
     * @param IProviderType|null $providerType
     */
    public function setProviderType(?IProviderType $providerType): void
    {
        $this->providerType = $providerType;
    }
}
