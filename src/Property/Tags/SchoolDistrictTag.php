<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


class SchoolDistrictTag extends AbstractStringTag
{
    const TYPE = 'SCHOOL_DISTRICT';

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
