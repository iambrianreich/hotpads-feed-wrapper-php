<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\ListingType;


use RWC\HotPads\Property\IListingType;

class Rental implements IListingType
{
    const TYPE = 'RENTAL';

    public function getValue(): string
    {
        return self::TYPE;
    }
}
