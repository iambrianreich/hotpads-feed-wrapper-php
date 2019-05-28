<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


class YearBuiltTag extends AbstractIntegerTag
{
    const TYPE = 'YEAR_BUILT';

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
