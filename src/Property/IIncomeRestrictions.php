<?php
declare(strict_types=1);


namespace RWC\HotPads\Property;


interface IIncomeRestrictions
{
    public function getIncomeRestrictions() : IIncomeRestriction;
}
