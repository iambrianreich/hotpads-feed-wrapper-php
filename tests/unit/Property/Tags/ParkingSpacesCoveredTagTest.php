<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ParkingSpacesCovered;

class ParkingSpacesCoveredTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSomeFeature()
    {
        $tag = new ParkingSpacesCovered();
        $this->assertEquals(ParkingSpacesCovered::TYPE, $tag->getType());
    }
}