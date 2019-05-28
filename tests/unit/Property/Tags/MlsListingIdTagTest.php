<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\MlsListingIdTag;

class MlsListingIdTagTest extends \Codeception\Test\Unit
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
        $tag = new MlsListingIdTag();
        $this->assertEquals(MlsListingIdTag::TYPE, $tag->getType());
    }

    public function testIsValidValueAlwaysReturnsTrue()
    {
        $tag = new MlsListingIdTag();
        $this->assertTrue($tag->isValidValue('fdsfsd'));
    }
}