<?php namespace Property;

use RWC\HotPads\Property\PriceFrequency\Day;

class DayTest extends \Codeception\Test\Unit
{
    // tests
    public function testValue()
    {
        $day = new Day();
        $this->assertEquals('DAY', $day->getValue());
    }
}