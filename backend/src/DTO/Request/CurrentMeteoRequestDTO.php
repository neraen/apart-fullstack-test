<?php

namespace App\DTO\Request;

class CurrentMeteoRequestDTO
{
    private string $timeOfDay;

    /**
     * @return string
     */
    public function getTimeOfDay(): string
    {
        return $this->timeOfDay;
    }

    /**
     * @param string $timeOfDay
     */
    public function setTimeOfDay(string $timeOfDay): void
    {
        $this->timeOfDay = $timeOfDay;
    }


}