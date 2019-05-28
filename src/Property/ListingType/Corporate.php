<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\ListingType;


use RWC\HotPads\Property\IListingType;

class Corporate implements IListingType
{
    const TYPE = 'CORPORATE';

    public function getValue(): string
    {
        return self::TYPE;
    }
}
