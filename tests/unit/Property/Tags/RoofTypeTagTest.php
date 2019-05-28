<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\RoofTypeTag;

class RoofTypeTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSetValueAcceptsAllValidValues()
    {
        $tag = new RoofTypeTag();
        foreach(RoofTypeTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }

    public function testGetTypeReportsCorrectType()
    {
        $tag = new RoofTypeTag();
        $this->assertEquals(RoofTypeTag::TYPE, $tag->getType());
    }
}