<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\ProviderType;


class PropertyManager implements IProviderType
{

    public function getValue(): string
    {
        return 'propertyManager';
    }
}
