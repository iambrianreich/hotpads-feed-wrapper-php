<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\SmallDogsAllowedTag;

class SmallDogsAllowedTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testGetTypeReturnsCorrectType()
    {
        $tag = new SmallDogsAllowedTag();
        $this->assertEquals(SmallDogsAllowedTag::TYPE, $tag->getType());
    }
}