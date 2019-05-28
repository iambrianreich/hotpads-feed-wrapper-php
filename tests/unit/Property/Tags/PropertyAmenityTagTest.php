<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\PropertyAmenityTag;

class PropertyAmenityTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSetValueAcceptsAllValidValues()
    {
        $tag = new PropertyAmenityTag();
        foreach(PropertyAmenityTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }

    public function testGetTypeReportsCorrectType()
    {
        $tag = new PropertyAmenityTag();
        $this->assertEquals(PropertyAmenityTag::TYPE, $tag->getType());
    }
}