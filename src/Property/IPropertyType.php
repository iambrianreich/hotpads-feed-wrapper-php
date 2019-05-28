<?php
declare(strict_types=1);


namespace RWC\HotPads\Property;


interface IPropertyType
{
    public function getValue() : string;
}
