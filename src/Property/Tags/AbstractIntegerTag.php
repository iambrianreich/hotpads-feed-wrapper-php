<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


abstract class AbstractIntegerTag extends AbstractTag
{
    /**
     * Returns true if the value is valid for this tag type.
     *
     * @param string $value The value to test.
     * @return bool Returns true if the value is valid.
     */
    public function isValidValue(string $value): bool
    {
        return ctype_digit($value);
    }
}
