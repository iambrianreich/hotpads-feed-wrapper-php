<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\RoomCountTag;

class RoomCountTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSomeFeature()
    {
        $tag = new RoomCountTag();
        $this->assertEquals(RoomCountTag::TYPE, $tag->getType());
    }
}