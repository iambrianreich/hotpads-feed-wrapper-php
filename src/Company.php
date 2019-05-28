<?php
declare(strict_types=1);


namespace RWC\HotPads;


class Company
{
    /**
     * Unique id of Company within system.
     *
     * @var string
     */
    protected $id;

    /**
     * Name of the company.
     *
     * @var string|null
     */
    protected $name;

    /**
     * URL of company website.
     *
     * @var string|null
     */
    protected $website;


    /**
     * Company location city.
     *
     * @var string
     */
    protected $city;

    /**
     * Company location state.
     *
     * @var string
     */
    protected $state;

    /**
     * Company logo URL.
     *
     * @var string|null
     */
    protected $companyLogo;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param string|null $website
     */
    public function setWebsite(?string $website): void
    {
        $this->website = $website;
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
     * @return string|null
     */
    public function getCompanyLogo(): ?string
    {
        return $this->companyLogo;
    }

    /**
     * @param string|null $companyLogo
     */
    public function setCompanyLogo(?string $companyLogo): void
    {
        $this->companyLogo = $companyLogo;
    }
}
