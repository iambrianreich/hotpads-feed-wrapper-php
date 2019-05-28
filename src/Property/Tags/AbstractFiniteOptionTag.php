<?php
declare(strict_types=1);

namespace RWC\HotPads\Property\Tags;


use RWC\HotPads\Property\IListingTag;

abstract class AbstractFiniteOptionTag extends AbstractTag implements IListingTag
{
    /**
     * Returns an array of valid options for this tag.
     *
     * @return string[]
     */
    public abstract function getOptions() : array;
    /**
     * Returns true if the value is valid for this tag type.
     *
     * @param string $value The value to test.
     * @return bool Returns true if the value is valid.
     */
    public function isValidValue(string $value) : bool
    {
        return in_array($value, $this->getOptions());
    }
}
