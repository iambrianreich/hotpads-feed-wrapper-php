<?php
declare(strict_types=1);


namespace RWC\HotPads\Property;

class Address
{
    /**
     * First line of address.
     *
     * @var string
     */
    protected $address1;

    /**
     * Second line of address.
     *
     * @var string|null
     */
    protected $address2;

    /**
     * City
     *
     * @var string
     */
    protected $city;

    /**
     * State code.
     *
     * @var string
     */
    protected $state;

    /**
     * Zipcode.
     *
     * @var string
     */
    protected $zipcode;

    /**
     * True to mask street address.
     *
     * @var bool
     */
    protected $hideStreet;

    /**
     * ISO country code.
     *
     * @var string
     */
    protected $country;

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     */
    public function setAddress1(string $address1): void
    {
        $this->address1 = $address1;
    }

    /**
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * @param string|null $address2
     */
    public function setAddress2(?string $address2): void
    {
        $this->address2 = $address2;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     */
    public function setZipcode(string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return bool
     */
    public function isHideStreet(): bool
    {
        return $this->hideStreet;
    }

    /**
     * @param bool $hideStreet
     */
    public function setHideStreet(bool $hideStreet): void
    {
        $this->hideStreet = $hideStreet;
    }
}
