<?php namespace Property;

use RWC\HotPads\Property\OpenHouse;

class OpenHouseTest extends \Codeception\Test\Unit
{
    /**
     * @var OpenHouse
     */
    protected $fixture;
    
    protected function _before()
    {
        $this->fixture = new OpenHouse();
    }

    // tests
    public function testGetterSetterAgreement()
    {
        $this->fixture->setAppointmentRequired(true);
        $this->assertTrue($this->fixture->isAppointmentRequired());

        $start = time();
        $end   = time() + 50;

        $this->fixture->setStart($start);
        $this->assertEquals($start, $this->fixture->getStart());

        $this->fixture->setEnd($end);
        $this->assertEquals($end, $this->fixture->getEnd());

    }
}