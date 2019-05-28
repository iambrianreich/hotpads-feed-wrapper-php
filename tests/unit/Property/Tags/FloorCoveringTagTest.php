<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ExteriorTypeTag;
use RWC\HotPads\Property\Tags\FloorCoveringTag;

class FloorCoveringTagTest extends \Codeception\Test\Unit
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
        $tag = new FloorCoveringTag();
        $this->assertEquals(FloorCoveringTag::TYPE, $tag->getType());
    }

    public function testAcceptsAllValues()
    {
        $tag = new FloorCoveringTag();
        foreach(FloorCoveringTag::LEGAL_VALUES as $value) {
            $tag->setValue($value);
            $this->assertEquals($value, $tag->getValue());
        }
    }
}