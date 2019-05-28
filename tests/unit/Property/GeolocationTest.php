<?php namespace Property;

use RWC\HotPads\Property\Geolocation;

class GeolocationTest extends \Codeception\Test\Unit
{
    /**
     * @var Geolocation
     */
    protected $fixture;
    
    protected function _before()
    {
        $this->fixture = new Geolocation();
    }

    // tests
    public function testGetterSetterAgreement()
    {
        $latitude = 45;
        $longitude = 50;

        $this->fixture->setLatitude($latitude);
        $this->assertEquals($latitude, $this->fixture->getLatitude());

        $this->fixture->setLongitude($longitude);
        $this->assertEquals($longitude, $this->fixture->getLongitude());
    }
}