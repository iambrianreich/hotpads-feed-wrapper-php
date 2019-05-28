<?php
declare(strict_types=1);

namespace RWC\HotPads\Property\Tags;


use RWC\HotPads\Property\IListingTag;

class RentIncludesTag extends AbstractTag implements IListingTag
{
    /**
     * Tag type.
     */
    const TYPE = 'RENT_INCLUDES';

    /**
     * Legal values for this tag.
     */
    const LEGAL_VALUES = [
        'Water',
        'Sewage',
        'Garbage',
        'Electricity',
        'Gas',
        'Internet',
        'Cable',
        'SatTv',
        'A/C',
        'HotWater',
    ];

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
    public function isValidValue(string $value) : bool
    {
        return in_array($value, self::LEGAL_VALUES);
    }
}
