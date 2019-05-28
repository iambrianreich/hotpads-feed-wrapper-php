<?php
declare(strict_types=1);


namespace RWC\HotPads\Property;


class SpecialOffer
{
    /**
     * Description of the special offer.
     *
     * @var string
     */
    protected $description;

    /**
     * Start date of the special offer.
     *
     * @var int|null
     */
    protected $startDate;

    /**
     * End date of the special offer.
     *
     * @var int|null
     */
    protected $endDate;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    /**
     * @param int|null $startDate
     */
    public function setStartDate(?int $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return int|null
     */
    public function getEndDate(): ?int
    {
        return $this->endDate;
    }

    /**
     * @param int|null $endDate
     */
    public function setEndDate(?int $endDate): void
    {
        $this->endDate = $endDate;
    }


}
