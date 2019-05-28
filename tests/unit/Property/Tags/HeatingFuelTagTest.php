<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\HeatingFuelTag;

class HeatingFuelTagTest extends \Codeception\Test\Unit
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
        $tag = new HeatingFuelTag();
        $this->assertEquals(HeatingFuelTag::TYPE, $tag->getType());
    }

    public function testAcceptsAllValues()
    {
        $tag = new HeatingFuelTag();
        foreach(HeatingFuelTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }
}