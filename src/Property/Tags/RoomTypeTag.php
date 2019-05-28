<?php
declare(strict_types=1);

namespace RWC\HotPads\Property\Tags;

class RoomTypeTag extends AbstractFiniteOptionTag
{
    /**
     * Tag type.
     */
    const TYPE = 'ROOM_TYPE';

    /**
     * Legal values for this tag.
     */
    const LEGAL_VALUES = [
        'BreakfastNook',
        'DiningRoom',
        'FamilyRoom',
        'LaundryRoom',
        'Library',
        'MasterBath',
        'MudRoom',
        'Office',
        'Pantry',
        'RecreationRoom',
        'Workshop',
        'SolariumAtrium',
        'SunRoom',
        'WalkInCloset',
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
