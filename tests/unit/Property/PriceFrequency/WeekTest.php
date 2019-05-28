<?php namespace Property;

use RWC\HotPads\Property\PriceFrequency\Week;

class WeekTest extends \Codeception\Test\Unit
{
    // tests
    public function testValue()
    {
        $day = new Week();
        $this->assertEquals('WEEK', $day->getValue());
    }
}