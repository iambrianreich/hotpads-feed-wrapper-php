<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


class LotSizeTag
    extends AbstractNumericTag
{
    const TYPE = 'LOT_SIZE';

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
