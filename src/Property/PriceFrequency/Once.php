<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\PriceFrequency;


class Once implements IPriceFrequency
{

    public function getValue(): string
    {
        return 'ONCE';
    }
}
