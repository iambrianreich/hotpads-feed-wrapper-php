<?php
declare(strict_types=1);

namespace RWC\HotPads\Property\Tags;

class ParkingTypeTag extends AbstractFiniteOptionTag
{
    /**
     * Tag type.
     */
    const TYPE = 'PARKING_TYPE';

    /**
     * Legal values for this tag.
     */
    const LEGAL_VALUES = [
        'Carport',
        'GarageAttached',
        'GarageDetached',
        'OffStreet',
        'OnStreet',
        'None'
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
