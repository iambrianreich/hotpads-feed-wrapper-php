<?php namespace Property\ProviderType;

use RWC\HotPads\Property\ProviderType\Agent;

class AgentTest extends \Codeception\Test\Unit
{
    // tests
    public function testSomeFeature()
    {
        $type = new Agent();
        $this->assertEquals('agent', $type->getValue());
    }
}