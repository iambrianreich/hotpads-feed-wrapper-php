<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\ProviderType;


class BrokerExclusives implements IProviderType
{

    public function getValue(): string
    {
        return 'brokerExclusives';
    }
}
