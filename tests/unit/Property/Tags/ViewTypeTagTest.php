<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ViewTypeTag;

class ViewTypeTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSetValueAcceptsAllValidValues()
    {
        $tag = new ViewTypeTag();
        foreach(ViewTypeTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }

    public function testGetTypeReportsCorrectType()
    {
        $tag = new ViewTypeTag();
        $this->assertEquals(ViewTypeTag::TYPE, $tag->getType());
    }
}