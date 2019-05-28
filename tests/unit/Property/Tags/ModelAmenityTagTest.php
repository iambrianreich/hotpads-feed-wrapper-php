<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ModelAmenityTag;

class ModelAmenityTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSetValueAcceptsAllValidValues()
    {
        $tag = new ModelAmenityTag();
        foreach(ModelAmenityTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }

    public function testGetTypeReportsCorrectType()
    {
        $tag = new ModelAmenityTag();
        $this->assertEquals(ModelAmenityTag::TYPE, $tag->getType());
    }
}