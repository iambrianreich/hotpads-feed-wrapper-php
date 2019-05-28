<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\CoolingSystemTag;

class CoolingSystemTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSetValueAcceptsAllValidValues()
    {
        $tag = new CoolingSystemTag();
        foreach(CoolingSystemTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }

    public function testGetTypeReportsCorrectType()
    {
        $tag = new CoolingSystemTag();
        $this->assertEquals(CoolingSystemTag::TYPE, $tag->getType());
    }
}