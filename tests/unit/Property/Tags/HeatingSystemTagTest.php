<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\HeatingSystemTag;

class HeatingSystemTagTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testGetType()
    {
        $tag = new HeatingSystemTag();
        $this->assertEquals(HeatingSystemTag::TYPE, $tag->getType());
    }

    public function testAcceptsAllValues()
    {
        $tag = new HeatingSystemTag();
        foreach(HeatingSystemTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }
}