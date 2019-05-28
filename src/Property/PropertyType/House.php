<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\PropertyType;


use RWC\HotPads\Property\IPropertyType;

class House implements IPropertyType
{
    const TYPE = 'HOUSE';

    public function getValue(): string
    {
        return self::TYPE;
    }
}
