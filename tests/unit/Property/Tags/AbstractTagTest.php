<?php namespace Property\Tags;

use RWC\HotPads\Property\Tags\AbstractTag;

class AbstractTagTest extends \Codeception\Test\Unit
{
    /**
     * @var AbstractTag
     */
    protected $fixture;
    
    protected function _before()
    {
        $this->fixture = new class () extends AbstractTag
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
             * Returns true if the value is valid for this tag type.
             *
             * @param string $value The value to test.
             * @return bool Returns true if the value is valid.
             */
            public function isValidValue(string $value): bool
            {
                return $value == 'foo';
            }
        };
    }

    protected function _after()
    {
    }

    // tests
    public function testSetValueWorksForValidValue()
    {
        $this->fixture->setValue('foo');
        $this->assertEquals('foo', $this->fixture->getValue());
    }

    // tests
    public function testSetValueThrowsExceptionForInvalidValue()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->fixture->setValue('not foo');
    }
}