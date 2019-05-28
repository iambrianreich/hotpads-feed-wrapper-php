<?php namespace Property;

use RWC\HotPads\Property\SpecialOffer;

class SpecialOfferTest extends \Codeception\Test\Unit
{
    /**
     * @var SpecialOffer
     */
    protected $fixture;
    
    protected function _before()
    {
        $this->fixture = new SpecialOffer();
    }

    // tests
    public function testSomeFeature()
    {
        $value = 'this is a description';
        $this->fixture->setDescription($value);
        $this->assertEquals($value, $this->fixture->getDescription());

        $value = time();
        $this->fixture->setStartDate($value);
        $this->assertEquals($value, $this->fixture->getStartDate());

        $value = time() + 60 * 60 * 24; // tomorrow
        $this->fixture->setEndDate($value);
        $this->assertEquals($value, $this->fixture->getEndDate());
    }
}