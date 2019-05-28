<?php namespace Property\ProviderType;

use RWC\HotPads\Property\ProviderType\BrokerExclusives;

class BrokerExclusivesTest extends \Codeception\Test\Unit
{
    // tests
    public function testSomeFeature()
    {
        $type = new BrokerExclusives();
        $this->assertEquals('brokerExclusives', $type->getValue());
    }
}