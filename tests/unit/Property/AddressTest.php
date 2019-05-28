<?php namespace Property;

use RWC\HotPads\Property\Address;
use UnitTester;

class AddressTest extends \Codeception\Test\Unit
{
    /**
     * @var Address
     */
    protected $fixture;
    
    protected function _before()
    {
        $this->fixture = new Address();
    }

    // tests
    public function testGetterSetterAgreement()
    {
        $address1 = '1234 Mockingbird Lane';
        $address2 = null;
        $city     = 'Winfield';
        $state    = 'PA';
        $zipcode  = '17889';
        $country  = 'US';

        $this->fixture->setAddress1($address1);
        $this->assertEquals($address1, $this->fixture->getAddress1());

        $this->fixture->setAddress2($address2);
        $this->assertEquals($address2, $this->fixture->getAddress2());

        $this->fixture->setCity($city);
        $this->assertEquals($city, $this->fixture->getCity());

        $this->fixture->setState($state);
        $this->assertEquals($state, $this->fixture->getState());

        $this->fixture->setZipcode($zipcode);
        $this->assertEquals($zipcode, $this->fixture->getZipcode());

        $this->fixture->setCountry($country);
        $this->assertEquals($country, $this->fixture->getCountry());

        $this->fixture->setHideStreet(true);
        $this->assertTrue($this->fixture->isHideStreet());

        $this->fixture->setHideStreet(false);
        $this->assertFalse($this->fixture->isHideStreet());
    }
}