<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\AbstractBooleanTag;

class AbtractBooleanTagTest extends \Codeception\Test\Unit
{
    /**
     * @var AbstractBooleanTag
     */
    protected $fixture;

    protected function _before()
    {
        $this->fixture = new class () extends AbstractBooleanTag
        {

            /**
             * Returns the tag type.
             *
             * @return string Returns the tag type.
             */
            public function getType(): string
            {
                return 'foo';
            }
        };
    }

    protected function _after()
    {
    }

    // tests
    public function testIsValidValueReturnsTrueForTrueString()
    {
        $this->assertTrue($this->fixture->isValidValue('true'));
    }

    public function testIsValidValueReturnsTrueForFalseString()
    {
        $this->assertTrue($this->fixture->isValidValue('false'));
    }

    public function testIsValidValueReturnsFalseForNonBooleanStrings()
    {
        $this->assertFalse($this->fixture->isValidValue(''));
        $this->assertFalse($this->fixture->isValidValue(12));
        $this->assertFalse($this->fixture->isValidValue('cdsasda3'));
    }

}