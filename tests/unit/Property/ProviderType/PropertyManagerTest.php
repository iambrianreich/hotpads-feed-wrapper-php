<?php namespace Property\ProviderType;

use RWC\HotPads\Property\ProviderType\PropertyManager;

class PropertyManagerTest extends \Codeception\Test\Unit
{
    // tests
    public function testSomeFeature()
    {
        $type = new PropertyManager();
        $this->assertEquals('propertyManager', $type->getValue());
    }
}