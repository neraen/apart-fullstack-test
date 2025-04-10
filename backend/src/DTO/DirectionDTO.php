<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class DirectionDTO
{
    private ?string $name = null;

    private ?string $direction = null;

    private ?string $stationStartName = null;

    private ?string $stationStartExtID = null;

    private ?string $stationEndName = null;

    private ?string $stationEndExtID = null;

    /**
     * @var DirectionStationDTO[]
     */
    private ?array $stations = [];

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
    public function getDirection(): ?string
    {
        return $this->direction;
    }

    /**
     * @param string|null $direction
     */
    public function setDirection(?string $direction): void
    {
        $this->direction = $direction;
    }

    /**
     * @return string|null
     */
    public function getStationStartName(): ?string
    {
        return $this->stationStartName;
    }

    /**
     * @param string|null $stationStartName
     */
    public function setStationStartName(?string $stationStartName): void
    {
        $this->stationStartName = $stationStartName;
    }

    /**
     * @return string|null
     */
    public function getStationStartExtID(): ?string
    {
        return $this->stationStartExtID;
    }

    /**
     * @param string|null $stationStartExtID
     */
    public function setStationStartExtID(?string $stationStartExtID): void
    {
        $this->stationStartExtID = $stationStartExtID;
    }

    /**
     * @return string|null
     */
    public function getStationEndName(): ?string
    {
        return $this->stationEndName;
    }

    /**
     * @param string|null $stationEndName
     */
    public function setStationEndName(?string $stationEndName): void
    {
        $this->stationEndName = $stationEndName;
    }

    /**
     * @return string|null
     */
    public function getStationEndExtID(): ?string
    {
        return $this->stationEndExtID;
    }

    /**
     * @param string|null $stationEndExtID
     */
    public function setStationEndExtID(?string $stationEndExtID): void
    {
        $this->stationEndExtID = $stationEndExtID;
    }

    /**
     * @return array|null
     */
    public function getStations(): ?array
    {
        return $this->stations;
    }

    /**
     * @param array|null $stations
     */
    public function setStations(?array $stations): void
    {
        $this->stations = $stations;
    }
}
