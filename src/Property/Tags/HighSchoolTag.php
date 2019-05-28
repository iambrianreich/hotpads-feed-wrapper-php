<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


class HighSchoolTag extends AbstractStringTag
{
    const TYPE = 'HIGH_SCHOOL';
    
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
