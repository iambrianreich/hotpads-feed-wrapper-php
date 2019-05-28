<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\ListingType;


use RWC\HotPads\Property\IListingType;

class Sublet implements IListingType
{
    const TYPE = 'SUBLET';

    public function getValue(): string
    {
        return self::TYPE;
    }
}
