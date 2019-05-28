<?php namespace Property;

use RWC\HotPads\Property\UtilityCosts;

class UtilityCostTest extends \Codeception\Test\Unit
{
    /**
     * @var UtilityCosts
     */
    protected $fixture;
    
    protected function _before()
    {
        $this->fixture = new UtilityCosts();
    }

    // tests
    public function testGetterSetterAgreement()
    {
        $value = 1;
        $this->fixture->setElectric($value);
        $this->assertEquals($value, $this->fixture->getElectric());

        $value = 2;
        $this->fixture->setHeating($value);
        $this->assertEquals($value, $this->fixture->getHeating());

        $value = 3;
        $this->fixture->setCable($value);
        $this->assertEquals($value, $this->fixture->getCable());

        $value = 4;
        $this->fixture->setWater($value);
        $this->assertEquals($value, $this->fixture->getWater());

        $value = 5;
        $this->fixture->setInternet($value);
        $this->assertEquals($value, $this->fixture->getInternet());

        $value = 6;
        $this->fixture->setGarbage($value);
        $this->assertEquals($value, $this->fixture->getGarbage());

        $value = 7;
        $this->fixture->setParking($value);
        $this->assertEquals($value, $this->fixture->getParking());

        $value = 8;
        $this->fixture->setOther($value);
        $this->assertEquals($value, $this->fixture->getOther());

        $this->assertEquals(1 + 2 + 3 + 4 + 5 + 6 + 7 + 8, $this->fixture->getTotal());
    }
}