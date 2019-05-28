<?php namespace Property;

use RWC\HotPads\Property\Restrictions;

class RestrictionsTest extends \Codeception\Test\Unit
{
    /**
     * @var Restrictions
     */
    protected $fixture;
    
    protected function _before()
    {
        $this->fixture = new Restrictions();
    }

    // tests
    public function testSomeFeature()
    {
        $disabledHousing = true;
        $this->fixture->setDisabledHousing($disabledHousing);
        $this->assertEquals($disabledHousing, $this->fixture->getDisabledHousing());

        $eightPersonHouseholdIncome = 543423;
        $this->fixture->setEightPersonHouseholdIncome($eightPersonHouseholdIncome);
        $this->assertEquals($eightPersonHouseholdIncome, $this->fixture->getEightPersonHouseholdIncome());

        $seniorHousing = true;
        $this->fixture->setSeniorHousing($seniorHousing);
        $this->assertEquals($seniorHousing, $this->fixture->getSeniorHousing());

        $studentHousing = true;
        $this->fixture->setStudentHousing($studentHousing);
        $this->assertEquals($studentHousing, $this->fixture->getStudentHousing());

        $militaryHousing = true;
        $this->fixture->setMilitaryHousing($militaryHousing);
        $this->assertEquals($militaryHousing, $this->fixture->getMilitaryHousing());

        $incomeRestrictedHousing = true;
        $this->fixture->setIncomeRestrictedHousing($incomeRestrictedHousing);
        $this->assertEquals($incomeRestrictedHousing, $this->fixture->getIncomeRestrictedHousing());

        $onePersonHouseholdIncome = 43000;
        $this->fixture->setOnePersonHouseholdIncome($onePersonHouseholdIncome);
        $this->assertEquals($onePersonHouseholdIncome, $this->fixture->getOnePersonHouseholdIncome());

        $twoPersonHouseholdIncome = 43000;
        $this->fixture->setTwoPersonHouseholdIncome($twoPersonHouseholdIncome);
        $this->assertEquals($twoPersonHouseholdIncome, $this->fixture->getTwoPersonHouseholdIncome());

        $threePersonHouseholdIncome = 43000;
        $this->fixture->setThreePersonHouseholdIncome($threePersonHouseholdIncome);
        $this->assertEquals($threePersonHouseholdIncome, $this->fixture->getThreePersonHouseholdIncome());

        $fourPersonHouseholdIncome = 43000;
        $this->fixture->setFourPersonHouseholdIncome($fourPersonHouseholdIncome);
        $this->assertEquals($fourPersonHouseholdIncome, $this->fixture->getFourPersonHouseholdIncome());

        $fivePersonHouseholdIncome = 43000;
        $this->fixture->setFivePersonHouseholdIncome($fivePersonHouseholdIncome);
        $this->assertEquals($fivePersonHouseholdIncome, $this->fixture->getFivePersonHouseholdIncome());

        $sixPersonHouseholdIncome = 43000;
        $this->fixture->setSixPersonHouseholdIncome($sixPersonHouseholdIncome);
        $this->assertEquals($sixPersonHouseholdIncome, $this->fixture->getSixPersonHouseholdIncome());

        $sevenPersonHouseholdIncome = 43000;
        $this->fixture->setSevenPesonHouseholdIncome($sevenPersonHouseholdIncome);
        $this->assertEquals($sevenPersonHouseholdIncome, $this->fixture->getSevenPesonHouseholdIncome());
    }
}