<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\LargeDogsAllowedTag;

class LargeDogsAllowedTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testGetTypeReturnsCorrectType()
    {
        $tag = new LargeDogsAllowedTag();
        $this->assertEquals(LargeDogsAllowedTag::TYPE, $tag->getType());
    }
}