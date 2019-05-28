<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ArchitecturalStyleTag;

class ArchitecturalStyleTagTest extends \Codeception\Test\Unit
{
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSetValueAcceptsAllValidValues()
    {
        $tag = new ArchitecturalStyleTag();
        foreach(ArchitecturalStyleTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }

    public function testGetTypeReportsCorrectType()
    {
        $tag = new ArchitecturalStyleTag();
        $this->assertEquals(ArchitecturalStyleTag::TYPE, $tag->getType());
    }
}