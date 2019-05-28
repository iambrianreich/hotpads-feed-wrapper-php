<?php namespace Property;

use RWC\HotPads\Property\PriceFrequency\Once;

class OnceTest extends \Codeception\Test\Unit
{
    // tests
    public function testValue()
    {
        $day = new Once();
        $this->assertEquals('ONCE', $day->getValue());
    }
}