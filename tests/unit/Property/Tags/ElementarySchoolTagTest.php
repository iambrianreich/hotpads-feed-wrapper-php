<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ElementarySchoolTag;

class ElementarySchoolTagTest extends \Codeception\Test\Unit
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
        $tag = new ElementarySchoolTag();
        $this->assertEquals(ElementarySchoolTag::TYPE, $tag->getType());
    }
}