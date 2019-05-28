<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\ProviderType;


interface IProviderType
{
    public function getValue() : string;
}
