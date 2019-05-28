<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\AbstractStringTag;

class AbstractStringTagTest extends \Codeception\Test\Unit
{
    /**
     * @var AbstractStringTag
     */
    protected $fixture;

    protected function _before()
    {
        $this->fixture = new class () extends AbstractStringTag
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
        $this->assertTrue($this->fixture->isValidValue('adsa'));
        $this->assertTrue($this->fixture->isValidValue('dasdas'));

        $this->fixture->setAllowEmpty(true);
        $this->assertTrue($this->fixture->isValidValue(''));
    }

    public function testIsValidValueReturnsFalseWhenAllowEmptyIsFalseAndValueIsEmpty()
    {
        $this->fixture->setAllowEmpty(false);
        $this->assertFalse($this->fixture->isValidValue(''));
    }
}