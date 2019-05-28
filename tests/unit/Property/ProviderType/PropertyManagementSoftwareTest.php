<?php namespace Property\ProviderType;

use RWC\HotPads\Property\ProviderType\PropertyManagementSoftware;

class PropertyManagementSoftwareTest extends \Codeception\Test\Unit
{
    // tests
    public function testSomeFeature()
    {
        $type = new PropertyManagementSoftware();
        $this->assertEquals('propertyManagementSoftware', $type->getValue());
    }
}