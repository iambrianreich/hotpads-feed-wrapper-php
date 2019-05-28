<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\PropertyType;


use RWC\HotPads\Property\IPropertyType;

class Condo implements IPropertyType
{
    const TYPE = 'CONDO';

    public function getValue(): string
    {
        return self::TYPE;
    }
}
