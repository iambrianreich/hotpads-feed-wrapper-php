<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


class MiddleSchoolTag extends AbstractStringTag
{
    const TYPE = 'MIDDLE_SCHOOL';
    
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
