<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\ListingType;


use RWC\HotPads\Property\IListingType;

class Room implements IListingType
{
    const TYPE = 'ROOM';

    public function getValue(): string
    {
        return self::TYPE;
    }
}
