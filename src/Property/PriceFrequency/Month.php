<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\PriceFrequency;


class Month implements IPriceFrequency
{

    public function getValue(): string
    {
        return 'MONTH';
    }
}
