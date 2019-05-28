<?php
declare(strict_types=1);

namespace RWC\HotPads\Property\Tags;

class CoolingSystemTag extends AbstractFiniteOptionTag
{
    /**
     * Tag type.
     */
    const TYPE = 'COOLING_SYSTEM';

    /**
     * Legal values for this tag.
     */
    const LEGAL_VALUES = [
        'None',
        'Central',
        'Evaporative',
        'Geothermal',
        'Wall',
        'Solar',
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
