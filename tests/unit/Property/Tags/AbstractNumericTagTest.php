<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\AbstractNumericTag;

class AbstractNumericTagTest extends \Codeception\Test\Unit
{
    /**
     * @var AbstractNumericTag
     */
    protected $fixture;

    protected function _before()
    {
        $this->fixture = new class () extends AbstractNumericTag
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
        $this->assertTrue($this->fixture->isValidValue('4234234.423423'));
    }

    public function testIsValidValueReturnsFalseForNonIntegerValues()
    {
        $this->assertFalse($this->fixture->isValidValue('invalid'));
        $this->assertFalse($this->fixture->isValidValue('a1'));
    }
}