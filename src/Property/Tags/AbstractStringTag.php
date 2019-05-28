<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


abstract class AbstractStringTag extends AbstractTag
{
    /**
     * True to allow empty values.
     *
     * @var bool
     */
    protected $allowEmpty = true;

    /**
     * Set to true to allow empty values, valse to required a nonempty value.
     *
     * @param bool $allowEmpty
     */
    public function setAllowEmpty(bool $allowEmpty) : void
    {
        $this->allowEmpty = $allowEmpty;
    }

    /**
     * Returns true if tag allows empty values.
     *
     * @return bool Returns true if tag allows empty values.
     */
    public function isAllowEmpty() : bool
    {
        return $this->allowEmpty;
    }

    /**
     * Returns true if the value is valid for this tag type.
     *
     * @param string $value The value to test.
     * @return bool Returns true if the value is valid.
     */
    public function isValidValue(string $value): bool
    {
        // if we allow empties, any value is valid.
        if ($this->isAllowEmpty()) {
            return true;
        }

        // Otherwise, only value if not empty.
        return ! empty($value);
    }
}
