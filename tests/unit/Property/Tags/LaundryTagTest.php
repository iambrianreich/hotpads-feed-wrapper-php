<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ExteriorTypeTag;
use RWC\HotPads\Property\Tags\LaundryTag;

class LaundryTagTest extends \Codeception\Test\Unit
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
        $tag = new LaundryTag();
        $this->assertEquals(LaundryTag::TYPE, $tag->getType());
    }

    public function testAcceptsAllValues()
    {
        $tag = new LaundryTag();
        foreach(LaundryTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }
}