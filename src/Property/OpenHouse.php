<?php
declare(strict_types=1);


namespace RWC\HotPads\Property;


class OpenHouse
{
    /**
     * True to require an appointment.
     *
     * @var bool
     */
    protected $appointmentRequired;
    /**
     * The starting timestamp.
     *
     * @var int
     */
    protected $start;

    /**
     * @var int
     */
    protected $end;

    /**
     * @return bool
     */
    public function isAppointmentRequired(): bool
    {
        return $this->appointmentRequired;
    }

    /**
     * @param bool $appointmentRequired
     */
    public function setAppointmentRequired(bool $appointmentRequired): void
    {
        $this->appointmentRequired = $appointmentRequired;
    }

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @param int $start
     */
    public function setStart(int $start): void
    {
        $this->start = $start;
    }

    /**
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }

    /**
     * @param int $end
     */
    public function setEnd(int $end): void
    {
        $this->end = $end;
    }
}
