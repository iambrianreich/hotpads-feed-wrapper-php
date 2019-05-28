<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\PriceFrequency;


class Day implements IPriceFrequency
{

    public function getValue(): string
    {
        return 'DAY';
    }
}
