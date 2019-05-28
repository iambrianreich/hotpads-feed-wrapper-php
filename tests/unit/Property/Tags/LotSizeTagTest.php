<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\ElementarySchoolTag;
use RWC\HotPads\Property\Tags\LotSizeTag;

class LotSizeTagTest extends \Codeception\Test\Unit
{
    // tests
    public function testSomeFeature()
    {
        $tag = new LotSizeTag();
        $this->assertEquals(LotSizeTag::TYPE, $tag->getType());
    }
}