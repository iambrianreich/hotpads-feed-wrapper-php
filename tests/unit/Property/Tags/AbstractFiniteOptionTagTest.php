<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\AbstractFiniteOptionTag;

class AbstractFiniteOptionTagTest extends \Codeception\Test\Unit
{
    /**
     * @var AbstractFiniteOptionTag
     */
    protected $fixture;

    protected function _before()
    {
        $this->fixture = new class () extends AbstractFiniteOptionTag
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

            /**
             * Returns an array of valid options for this tag.
             *
             * @return string[]
             */
            public function getOptions(): array
            {
                return ['valid'];
            }
        };
    }

    protected function _after()
    {
    }

    // tests
    public function testIsValidValueReturnsTrueForItemInGetOptions()
    {
        $this->assertTrue($this->fixture->isValidValue('valid'));
    }

    public function testIsValidValueReturnsFalseForItemNotInGetOptions()
    {
        $this->assertFalse($this->fixture->isValidValue('invalid'));
    }
}