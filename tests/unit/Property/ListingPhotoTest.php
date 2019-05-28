<?php namespace Property;

use RWC\HotPads\Property\ListingPhoto;

class ListingPhotoTest extends \Codeception\Test\Unit
{
    /**
     * @var ListingPhoto
     */
    protected $fixture;
    
    protected function _before()
    {
        $this->fixture = new ListingPhoto();
    }

    // tests
    public function testGetterAndSetterAgreement()
    {
        $value = 'https://fubarrealestate.com/property-1/image-1.jpg';
        $this->fixture->setUrl($value);
        $this->assertEquals($value, $this->fixture->getUrl());

        $value = 'Caption';
        $this->fixture->setCaption($value);
        $this->assertEquals($value, $this->fixture->getCaption());

        $value = 'Label';
        $this->fixture->setLabel($value);
        $this->assertEquals($value, $this->fixture->getLabel());
    }

    public function testSetCaptionThrowsExceptionForCaptionOver30Chars()
    {
        $this->expectException(\InvalidArgumentException::class);
        $value = str_repeat('a', 31);
        $this->fixture->setCaption($value);
    }

    public function testSetLabelThrowsExceptionForCaptionOver30Chars()
    {
        $this->expectException(\InvalidArgumentException::class);
        $value = str_repeat('a', 31);
        $this->fixture->setLabel($value);
    }

    public function testSetUrlThrowsExceptionForCaptionOver30Chars()
    {
        $this->expectException(\InvalidArgumentException::class);
        $value = str_repeat('a', 256);
        $this->fixture->setUrl($value);
    }
}