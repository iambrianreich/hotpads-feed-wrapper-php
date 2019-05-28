<?php
declare(strict_types=1);


namespace RWC\HotPads\Property;


interface IRestrictions
{
    /**
     * Returns a
     * @return IRestriction[]
     */
    public function getRestrictions() : array;

    public function addRestriction(IRestriction $restriction) : void;


}
