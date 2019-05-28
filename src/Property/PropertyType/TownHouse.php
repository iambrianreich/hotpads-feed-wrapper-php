<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\PropertyType;


use RWC\HotPads\Property\IPropertyType;

class TownHouse implements IPropertyType
{
    const TYPE = 'TOWNHOUSE';

    public function getValue(): string
    {
        return self::TYPE;
    }
}
