<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\RoomTypeTag;

class RoomTypeTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSetValueAcceptsAllValidValues()
    {
        $tag = new RoomTypeTag();
        foreach(RoomTypeTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }

    public function testGetTypeReportsCorrectType()
    {
        $tag = new RoomTypeTag();
        $this->assertEquals(RoomTypeTag::TYPE, $tag->getType());
    }
}