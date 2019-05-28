<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\HighSchoolTag;

class HighSchoolTagTest extends \Codeception\Test\Unit
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
    public function testSomeFeature()
    {
        $tag = new HighSchoolTag();
        $this->assertEquals(HighSchoolTag::TYPE, $tag->getType());
    }
}