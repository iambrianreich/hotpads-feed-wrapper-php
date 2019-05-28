<?php namespace Property\ProviderType;

use RWC\HotPads\Property\ProviderType\Locator;

class LocatorTest extends \Codeception\Test\Unit
{
    // tests
    public function testSomeFeature()
    {
        $type = new Locator();
        $this->assertEquals('locator', $type->getValue());
    }
}