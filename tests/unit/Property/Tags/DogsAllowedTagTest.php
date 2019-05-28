<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\DogsAllowedTag;

class DogsAllowedTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testGetTypeReturnsCorrectType()
    {
        $tag = new DogsAllowedTag();
        $this->assertEquals(DogsAllowedTag::TYPE, $tag->getType());
    }
}