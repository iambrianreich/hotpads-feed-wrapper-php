<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\ProviderType;


class Locator implements IProviderType
{

    public function getValue(): string
    {
        return 'locator';
    }
}
