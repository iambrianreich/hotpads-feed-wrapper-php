<?php
declare(strict_types=1);

namespace RWC\HotPads\Property\Tags;

class HeatingFuelTag extends AbstractFiniteOptionTag
{
    /**
     * Tag type.
     */
    const TYPE = 'HEATING_FUEL';

    /**
     * Legal values for this tag.
     */
    const LEGAL_VALUES = [
        'None',
        'Coal',
        'Electric',
        'Gas',
        'Oil',
        'PropaneButane',
        'Solar',
        'WoodPellet',
        'Other',
    ];

    /**
     * Returns the tag type.
     *
     * @return string Returns the tag type.
     */
    public function getType(): string
    {
        return self::TYPE;
    }

    /**
     * Returns an array of valid options for this tag.
     *
     * @return string[]
     */
    public function getOptions(): array
    {
        return self::LEGAL_VALUES;
    }
}
