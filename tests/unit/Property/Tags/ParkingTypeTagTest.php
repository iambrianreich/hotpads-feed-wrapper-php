<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ParkingTypeTag;

class ParkingTypeTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSetValueAcceptsAllValidValues()
    {
        $tag = new ParkingTypeTag();
        foreach(ParkingTypeTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }

    public function testGetTypeReportsCorrectType()
    {
        $tag = new ParkingTypeTag();
        $this->assertEquals(ParkingTypeTag::TYPE, $tag->getType());
    }
}