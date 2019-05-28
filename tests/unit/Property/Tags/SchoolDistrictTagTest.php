<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\SchoolDistrictTag;

class SchoolDistrictTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSomeFeature()
    {
        $tag = new SchoolDistrictTag();
        $this->assertEquals(SchoolDistrictTag::TYPE, $tag->getType());
    }
}