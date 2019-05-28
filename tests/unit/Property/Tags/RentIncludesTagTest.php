<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\RentIncludesTag;

class RentIncludesTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSetValueAcceptsAllValidValues()
    {
        $tag = new RentIncludesTag();
        foreach(RentIncludesTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }

    public function testGetTypeReportsCorrectType()
    {
        $tag = new RentIncludesTag();
        $this->assertEquals(RentIncludesTag::TYPE, $tag->getType());
    }
}