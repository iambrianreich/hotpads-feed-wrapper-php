<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ParkingSpacesTag;

class ParkingSpacesTagTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $tag = new ParkingSpacesTag();
        $this->assertEquals(ParkingSpacesTag::TYPE, $tag->getType());
    }
}