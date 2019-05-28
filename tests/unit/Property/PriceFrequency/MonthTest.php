<?php namespace Property;

use RWC\HotPads\Property\PriceFrequency\Month;

class MonthTest extends \Codeception\Test\Unit
{
    // tests
    public function testValue()
    {
        $day = new Month();
        $this->assertEquals('MONTH', $day->getValue());
    }
}