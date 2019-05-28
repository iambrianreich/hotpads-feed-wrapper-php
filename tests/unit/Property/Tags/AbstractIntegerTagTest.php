<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\AbstractIntegerTag;

class AbstractIntegerTagTest extends \Codeception\Test\Unit
{
    /**
     * @var AbstractIntegerTag
     */
    protected $fixture;

    protected function _before()
    {
        $this->fixture = new class () extends AbstractIntegerTag
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
    public function testIsValidValueReturnsTrueForIntegerItem()
    {
        $this->assertTrue($this->fixture->isValidValue('4234234'));
    }

    public function testIsValidValueReturnsFalseForNonIntegerValues()
    {
        $this->assertFalse($this->fixture->isValidValue('invalid'));
        $this->assertFalse($this->fixture->isValidValue('a1'));
        $this->assertFalse($this->fixture->isValidValue('423423.432'));
    }
}