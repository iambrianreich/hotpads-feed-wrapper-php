<?php
declare(strict_types=1);


namespace RWC\HotPads\Property;


class Restrictions
{
    /**
     * True if the property is senior housing.
     *
     * @var bool|null
     */
    protected $seniorHousing;

    /**
     * True if the property is student housing.
     *
     * @var bool|null
     */
    protected $studentHousing;

    /**
     * True if the property is military housing
     *
     * @var bool|null
     */
    protected $militaryHousing;

    /**
     * True if the property is disabled housing.
     *
     * @var bool|null
     */
    protected $disabledHousing;

    /**
     * True if the property is income-restricted housing.
     *
     * @var bool|null
     */
    protected $incomeRestrictedHousing;

    /**
     * Dollar amount for specifying the income for 1 person household.
     *
     * @var int|null
     */
    protected $onePersonHouseholdIncome;

    /**
     * Dollar amount for specifying the income for 2 person household.
     *
     * @var int|null
     */
    protected $twoPersonHouseholdIncome;

    /**
     * Dollar amount for specifying the income for 3 person household.
     *
     * @var int|null
     */
    protected $threePersonHouseholdIncome;

    /**
     * Dollar amount for specifying the income for 4 person household.
     *
     * @var int|null
     */
    protected $fourPersonHouseholdIncome;

    /**
     * Dollar amount for specifying the income for 5 person household.
     *
     * @var int|null
     */
    protected $fivePersonHouseholdIncome;

    /**
     * Dollar amount for specifying the income for 6 person household.
     *
     * @var int|null
     */
    protected $sixPersonHouseholdIncome;

    /**
     * Dollar amount for specifying the income for 7 person household.
     *
     * @var int|null
     */
    protected $sevenPesonHouseholdIncome;

    /**
     * Dollar amount for specifying the income for 8 person household.
     *
     * @var int|null
     */
    protected $eightPersonHouseholdIncome;

    /**
     * @return bool|null
     */
    public function getSeniorHousing(): ?bool
    {
        return $this->seniorHousing;
    }

    /**
     * @param bool|null $seniorHousing
     */
    public function setSeniorHousing(?bool $seniorHousing): void
    {
        $this->seniorHousing = $seniorHousing;
    }

    /**
     * @return bool|null
     */
    public function getStudentHousing(): ?bool
    {
        return $this->studentHousing;
    }

    /**
     * @param bool|null $studentHousing
     */
    public function setStudentHousing(?bool $studentHousing): void
    {
        $this->studentHousing = $studentHousing;
    }

    /**
     * @return bool|null
     */
    public function getMilitaryHousing(): ?bool
    {
        return $this->militaryHousing;
    }

    /**
     * @param bool|null $militaryHousing
     */
    public function setMilitaryHousing(?bool $militaryHousing): void
    {
        $this->militaryHousing = $militaryHousing;
    }

    /**
     * @return bool|null
     */
    public function getDisabledHousing(): ?bool
    {
        return $this->disabledHousing;
    }

    /**
     * @param bool|null $disabledHousing
     */
    public function setDisabledHousing(?bool $disabledHousing): void
    {
        $this->disabledHousing = $disabledHousing;
    }

    /**
     * @return bool|null
     */
    public function getIncomeRestrictedHousing(): ?bool
    {
        return $this->incomeRestrictedHousing;
    }

    /**
     * @param bool|null $incomeRestrictedHousing
     */
    public function setIncomeRestrictedHousing(?bool $incomeRestrictedHousing): void
    {
        $this->incomeRestrictedHousing = $incomeRestrictedHousing;
    }

    /**
     * @return int|null
     */
    public function getOnePersonHouseholdIncome(): ?int
    {
        return $this->onePersonHouseholdIncome;
    }

    /**
     * @param int|null $onePersonHouseholdIncome
     */
    public function setOnePersonHouseholdIncome(?int $onePersonHouseholdIncome): void
    {
        $this->onePersonHouseholdIncome = $onePersonHouseholdIncome;
    }

    /**
     * @return int|null
     */
    public function getTwoPersonHouseholdIncome(): ?int
    {
        return $this->twoPersonHouseholdIncome;
    }

    /**
     * @param int|null $twoPersonHouseholdIncome
     */
    public function setTwoPersonHouseholdIncome(?int $twoPersonHouseholdIncome): void
    {
        $this->twoPersonHouseholdIncome = $twoPersonHouseholdIncome;
    }

    /**
     * @return int|null
     */
    public function getThreePersonHouseholdIncome(): ?int
    {
        return $this->threePersonHouseholdIncome;
    }

    /**
     * @param int|null $threePersonHouseholdIncome
     */
    public function setThreePersonHouseholdIncome(?int $threePersonHouseholdIncome): void
    {
        $this->threePersonHouseholdIncome = $threePersonHouseholdIncome;
    }

    /**
     * @return int|null
     */
    public function getFourPersonHouseholdIncome(): ?int
    {
        return $this->fourPersonHouseholdIncome;
    }

    /**
     * @param int|null $fourPersonHouseholdIncome
     */
    public function setFourPersonHouseholdIncome(?int $fourPersonHouseholdIncome): void
    {
        $this->fourPersonHouseholdIncome = $fourPersonHouseholdIncome;
    }

    /**
     * @return int|null
     */
    public function getFivePersonHouseholdIncome(): ?int
    {
        return $this->fivePersonHouseholdIncome;
    }

    /**
     * @param int|null $fivePersonHouseholdIncome
     */
    public function setFivePersonHouseholdIncome(?int $fivePersonHouseholdIncome): void
    {
        $this->fivePersonHouseholdIncome = $fivePersonHouseholdIncome;
    }

    /**
     * @return int|null
     */
    public function getSixPersonHouseholdIncome(): ?int
    {
        return $this->sixPersonHouseholdIncome;
    }

    /**
     * @param int|null $sixPersonHouseholdIncome
     */
    public function setSixPersonHouseholdIncome(?int $sixPersonHouseholdIncome): void
    {
        $this->sixPersonHouseholdIncome = $sixPersonHouseholdIncome;
    }

    /**
     * @return int|null
     */
    public function getSevenPesonHouseholdIncome(): ?int
    {
        return $this->sevenPesonHouseholdIncome;
    }

    /**
     * @param int|null $sevenPesonHouseholdIncome
     */
    public function setSevenPesonHouseholdIncome(?int $sevenPesonHouseholdIncome): void
    {
        $this->sevenPesonHouseholdIncome = $sevenPesonHouseholdIncome;
    }

    /**
     * @return int|null
     */
    public function getEightPersonHouseholdIncome(): ?int
    {
        return $this->eightPersonHouseholdIncome;
    }

    /**
     * @param int|null $eightPersonHouseholdIncome
     */
    public function setEightPersonHouseholdIncome(?int $eightPersonHouseholdIncome): void
    {
        $this->eightPersonHouseholdIncome = $eightPersonHouseholdIncome;
    }
}
