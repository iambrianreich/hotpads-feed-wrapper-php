<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ExteriorTypeTag;

class ExteriorTypeTagTest extends \Codeception\Test\Unit
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
        $tag = new ExteriorTypeTag();
        $this->assertEquals(ExteriorTypeTag::TYPE, $tag->getType());
    }

    public function testAcceptsAllValues()
    {
        $tag = new ExteriorTypeTag();
        foreach(ExteriorTypeTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }
}