<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\YearBuiltTag;

class YearBuiltTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSomeFeature()
    {
        $tag = new YearBuiltTag();
        $this->assertEquals(YearBuiltTag::TYPE, $tag->getType());
    }
}