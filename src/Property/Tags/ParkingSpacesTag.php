<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


class ParkingSpacesTag extends AbstractIntegerTag
{
    const TYPE = 'PARKING_SPACES';

    /**
     * Returns the tag type.
     *
     * @return string Returns the tag type.
     */
    public function getType(): string
    {
        return self::TYPE;
    }
}
