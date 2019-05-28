<?php
declare(strict_types=1);

namespace RWC\HotPads\Property\Tags;

class ModelAmenitySelectTag extends ModelAmenityTag
{
    /**
     * Tag type.
     */
    const TYPE = 'MODEL_AMENITY_SELECT';

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
