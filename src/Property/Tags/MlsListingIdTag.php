<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


class MlsListingIdTag extends AbstractTag
{
    /**
     * Tag type.
     */
    const TYPE = 'MLS_LISTING_ID';

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
     * Returns true if the value is valid for this tag type.
     *
     * @param string $value The value to test.
     * @return bool Returns true if the value is valid.
     */
    public function isValidValue(string $value): bool
    {
        return true;
    }
}
