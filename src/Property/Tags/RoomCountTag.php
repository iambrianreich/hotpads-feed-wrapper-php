<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


class RoomCountTag extends AbstractIntegerTag
{
    const TYPE = 'ROOM_COUNT';

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
