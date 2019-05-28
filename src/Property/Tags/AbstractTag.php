<?php
declare(strict_types=1);


namespace RWC\HotPads\Property\Tags;


use RWC\HotPads\Property\IListingTag;

abstract class AbstractTag implements IListingTag
{
    /**
     * The tag value.
     *
     * @var string
     */
    protected $value;

    /**
     * Sets the tag value.
     *
     * @param string $value The tag value.
     * @throws \InvalidArgumentException if the value is invalid.
     */
    public function setValue(string $value) : void
    {
        if (! $this->isValidValue($value)) {
            throw new \InvalidArgumentException($value .
                ' is an invalid valid for tag type ' . $this->getType());
        }

        $this->value = $value;
    }

    /**
     * Returns the tag type.
     *
     * @return string Returns the tag type.
     */
    abstract public function getType(): string;
    /**
     * Returns the tag value.
     *
     * @return string Returns the tag value.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Returns true if the value is valid for this tag type.
     *
     * @param string $value The value to test.
     * @return bool Returns true if the value is valid.
     */
    abstract public function isValidValue(string $value) : bool;
}