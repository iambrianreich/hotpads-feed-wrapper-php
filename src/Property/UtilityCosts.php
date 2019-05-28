<?php
declare(strict_types=1);


namespace RWC\HotPads\Property;


class UtilityCosts
{
    /**
     * Cost of electric.
     *
     * @var float
     */
    protected $electric;

    /**
     * Cost of heat
     *
     * @var float
     */
    protected $heating;

    /**
     * Cost of cable.
     *
     * @var float
     */
    protected $cable;

    /**
     * Cost of water/sewer.
     *
     * @var float
     */
    protected $water;

    /**
     * Cost of Internet
     *
     * @var float
     */
    protected $internet;

    /**
     * Cost of garbage service.
     *
     * @var float
     */
    protected $garbage;

    /**
     * Cost of parking.
     *
     * @var float
     */
    protected $parking;

    /**
     * Cost of other recurring utility costs.
     *
     * @var float
     */
    protected $other;

    /**
     * @return float
     */
    public function getElectric(): float
    {
        return $this->electric;
    }

    /**
     * @param float $electric
     */
    public function setElectric(float $electric): void
    {
        $this->electric = $electric;
    }

    /**
     * @return float
     */
    public function getHeating(): float
    {
        return $this->heating;
    }

    /**
     * @param float $heating
     */
    public function setHeating(float $heating): void
    {
        $this->heating = $heating;
    }

    /**
     * @return float
     */
    public function getCable(): float
    {
        return $this->cable;
    }

    /**
     * @param float $cable
     */
    public function setCable(float $cable): void
    {
        $this->cable = $cable;
    }

    /**
     * @return float
     */
    public function getWater(): float
    {
        return $this->water;
    }

    /**
     * @param float $water
     */
    public function setWater(float $water): void
    {
        $this->water = $water;
    }

    /**
     * @return float
     */
    public function getInternet(): float
    {
        return $this->internet;
    }

    /**
     * @param float $internet
     */
    public function setInternet(float $internet): void
    {
        $this->internet = $internet;
    }

    /**
     * @return float
     */
    public function getGarbage(): float
    {
        return $this->garbage;
    }

    /**
     * @param float $garbage
     */
    public function setGarbage(float $garbage): void
    {
        $this->garbage = $garbage;
    }

    /**
     * @return float
     */
    public function getParking(): float
    {
        return $this->parking;
    }

    /**
     * @param float $parking
     */
    public function setParking(float $parking): void
    {
        $this->parking = $parking;
    }

    /**
     * @return float
     */
    public function getOther(): float
    {
        return $this->other;
    }

    /**
     * @param float $other
     */
    public function setOther(float $other): void
    {
        $this->other = $other;
    }

    /**
     * Returns total cost.
     *
     * @return float Returns the total cost.
     */
    public function getTotal() : float
    {
        return $this->getCable() + $this->getElectric() + $this->getGarbage() +
            $this->getHeating() + $this->getInternet() + $this->getOther() +
            $this->getParking() + $this->getWater();
    }
}
