<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\CatsAllowedTag;

class CatsAllowedTagTest extends \Codeception\Test\Unit
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
    public function testGetTypeReturnsCorrectType()
    {
        $tag = new CatsAllowedTag();
        $this->assertEquals(CatsAllowedTag::TYPE, $tag->getType());
    }
}