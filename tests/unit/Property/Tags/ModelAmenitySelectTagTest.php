<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ModelAmenitySelectTag;

class ModelAmenitySelectTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSetValueAcceptsAllValidValues()
    {
        $tag = new ModelAmenitySelectTag();
        foreach(ModelAmenitySelectTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }

    public function testGetTypeReportsCorrectType()
    {
        $tag = new ModelAmenitySelectTag();
        $this->assertEquals(ModelAmenitySelectTag::TYPE, $tag->getType());
    }
}