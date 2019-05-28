<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


class SmallDogsAllowedTag extends AbstractBooleanTag
{
    const TYPE = 'SMALL_DOGS_ALLOWED';

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
