<?php
declare(strict_types=1);


namespace RWC\HotPads\Property;


interface IListingTag
{
    public function getType() : string;
    public function setValue(string $value) : void;
    public function getValue() : string;
    public function isValidValue(string $value) : bool;

}
