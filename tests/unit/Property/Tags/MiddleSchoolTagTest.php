<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\HighSchoolTag;
use RWC\HotPads\Property\Tags\MiddleSchoolTag;

class MiddleSchoolTagTest extends \Codeception\Test\Unit
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
        $tag = new MiddleSchoolTag();
        $this->assertEquals(MiddleSchoolTag::TYPE, $tag->getType());
    }
}