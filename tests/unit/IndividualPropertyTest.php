<?php

use RWC\HotPads\IndividualProperty;

class IndividualPropertyTest extends \Codeception\Test\Unit
{
    /**
     * @var IndividualProperty
     */
    protected $property;
    
    protected function _before()
    {
        $this->property = new IndividualProperty();
    }

    protected function _after()
    {
    }

    // tests
    public function testAgreement()
    {
        $value = '423423';
        $this->property->setId($value);
        $this->assertEquals($value, $this->property->getId());

        $value = '423423';
        $this->property->setCompanyId($value);
        $this->assertEquals($value, $this->property->getCompanyId());

        $value = 'fsdfsd ';
        $this->property->setDescription($value);
        $this->assertEquals($value, $this->property->getDescription());

        $value = 'https://www.fubar.biz/';
        $this->property->setWebsite($value);
        $this->assertEquals($value, $this->property->getWebsite());

        $value = new \RWC\HotPads\Property\Address();
        $value->setState('PA');
        $value->setCity('Winfield');
        $value->setHideStreet(true);
        $value->setZipcode('99999');
        $value->setAddress1('14 Fubar Drive');
        $this->property->setAddress($value);
        $this->assertEquals($value, $this->property->getAddress());

        $value = '1444 Whatever Drive.';
        $this->property->setName($value);
        $this->assertEquals($value, $this->property->getName());

        $value = 'replies@fubar.biz';
        $this->property->setContactEmail($value);
        $this->assertEquals($value, $this->property->getContactEmail());

        $value = new \RWC\HotPads\Property\ListingType\Rental();
        $this->property->setListingType($value);
        $this->assertEquals($value, $this->property->getListingType());

        $value = new \RWC\HotPads\Property\PropertyType\TownHouse();
        $this->property->setPropertyType($value);
        $this->assertEquals($value, $this->property->getPropertyType());

        $value = new \RWC\HotPads\Property\Restrictions();
        $value->setFourPersonHouseholdIncome(40000);
        $value->setEightPersonHouseholdIncome(99999);
        $this->property->setRestrictions($value);
        $this->assertEquals($value, $this->property->getRestrictions());

        $value = '34';
        $this->property->setUnit($value);
        $this->assertEquals($value, $this->property->getUnit());

        $value = new \RWC\HotPads\Property\Geolocation();
        $value->setLongitude(34.5);
        $value->setLatitude(23.001);
        $this->property->setGeolocation($value);
        $this->assertEquals($value, $this->property->getGeolocation());

        $value = time();
        $this->property->setLastUpdated($value);
        $this->assertEquals($value, $this->property->getLastUpdated());

        $value = 'Billy Bob';
        $this->property->setContactName($value);
        $this->assertEquals($value, $this->property->getContactName());

        $value = '555-555-5555';
        $this->property->setContactFax($value);
        $this->assertEquals($value, $this->property->getContactFax());

        $value = '555-555-5555';
        $this->property->setContactPhone($value);
        $this->assertEquals($value, $this->property->getContactPhone());

        $openHouse = new \RWC\HotPads\Property\OpenHouse();
        $openHouse->setStart(time());
        $openHouse->setEnd(time() + 60 * 60);

        $value = [ $openHouse ];
        $this->property->setOpenHouses($value);
        $this->assertEquals($value, $this->property->getOpenHouses());

        $value = '423423';
        $this->property->setContactTimes($value);
        $this->assertEquals($value, $this->property->getContactTimes());

        $value = '423423';
        $this->property->setContactMethodPreference($value);
        $this->assertEquals($value, $this->property->getContactMethodPreference());

        $value = '423423';
        $this->property->setPreviewMessage($value);
        $this->assertEquals($value, $this->property->getPreviewMessage());

        $value = '423423';
        $this->property->setTerms($value);
        $this->assertEquals($value, $this->property->getTerms());

        $value = '423423';
        $this->property->setLeaseTerms($value);
        $this->assertEquals($value, $this->property->getLeaseTerms());

        $value = 'https://fubar.biz/tour.html';
        $this->property->setVirtualTourUrl($value);
        $this->assertEquals($value, $this->property->getVirtualTourUrl());

        $value = true;
        $this->property->setIsFurnished($value);
        $this->assertEquals($value, $this->property->getisFurnished());

        $value = false;
        $this->property->setSmokingAllowed($value);
        $this->assertEquals($value, $this->property->getSmokingAllowed());


        $value = new \RWC\HotPads\Property\UtilityCosts();
        $value->setParking(50.00);
        $this->property->setUtilityCosts($value);
        $this->assertEquals($value, $this->property->getUtilityCosts());
        $this->assertEquals($value->getParking(), $this->property->getUtilityCosts()->getParking());

        $tag = new \RWC\HotPads\Property\Tags\MlsListingIdTag();
        $tag->setValue('abcdef');
        $tags = [ $tag ];
        $this->property->setListingTags($tags);
        $this->assertEquals($tags, $this->property->getListingTags());

        $value = 'fubar';
        $this->property->setListingPermission($value);
        $this->assertEquals($value, $this->property->getListingPermission());

        $specialOffer = new \RWC\HotPads\Property\SpecialOffer();
        $specialOffer->setDescription('fubar');
        $specialOffer->setEndDate(time() + 100000);
        $specialOffer->setStartDate(time());

        $value = [ $specialOffer ];
        $this->property->setSpecialOffers($value);
        $this->assertEquals($value, $this->property->getSpecialOffers());

        $listingPhoto1 = new \RWC\HotPads\Property\ListingPhoto();
        $listingPhoto1->setUrl('https://foo.bar/image1.jpg');
        $listingPhoto1->setLabel('label');
        $listingPhoto1->setCaption('caption');

        $value = [ $listingPhoto1 ];
        $this->property->setListingPhotos($value);
        $this->assertEquals($value, $this->property->getListingPhotos());

        $value = 40.00;
        $this->property->setPrice($value);
        $this->assertEquals($value, $this->property->getPrice());

        $value = new RWC\HotPads\Property\PriceFrequency\Day();
        $this->property->setPriceFrequency($value);
        $this->assertEquals($value, $this->property->getPriceFrequency());

        $value = 50;
        $this->property->setHoaFee($value);
        $this->assertEquals($value, $this->property->getHoaFee());

        $value = 50.00;
        $this->property->setDeposit($value);
        $this->assertEquals($value, $this->property->getDeposit());

        $value = 3;
        $this->property->setNumBedrooms($value);
        $this->assertEquals($value, $this->property->getNumBedrooms());

        $value = 2;
        $this->property->setNumFullBaths($value);
        $this->assertEquals($value, $this->property->getNumFullBaths());

        $value = 2;
        $this->property->setNumHalfBaths($value);
        $this->assertEquals($value, $this->property->getNumHalfBaths());

        $value = 1250;
        $this->property->setSquareFeet($value);
        $this->assertEquals($value, $this->property->getSquareFeet());

        $value = time();
        $this->property->setDateAvailable($value);
        $this->assertEquals($value, $this->property->getDateAvailable());

        $value = new \RWC\HotPads\Property\ProviderType\Agent();
        $this->property->setProviderType($value);
        $this->assertEquals($value, $this->property->getProviderType());
    }
}