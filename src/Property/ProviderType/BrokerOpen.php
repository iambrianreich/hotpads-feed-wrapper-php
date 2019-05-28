<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\ProviderType;


class BrokerOpen implements IProviderType
{

    public function getValue(): string
    {
        return 'brokerOpen';
    }
}
