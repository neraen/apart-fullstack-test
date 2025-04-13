<?php

namespace App\DTO\Meteo;

class DailyMeteoDTO
{
    private \DateTimeImmutable $created;
    private int $tempMin;
    private int $tempMax;
    private PartOfDayMeteoDTO $meteoMatin;
    private PartOfDayMeteoDTO $meteoApresMidi;
    private PartOfDayMeteoDTO $meteoSoir;

    /**
     * @return \DateTimeImmutable
     */
    public function getCreated(): \DateTimeImmutable
    {
        return $this->created;
    }

    /**
     * @param \DateTimeImmutable $created
     */
    public function setCreated(\DateTimeImmutable $created): void
    {
        $this->created = $created;
    }

    /**
     * @return int
     */
    public function getTempMin(): int
    {
        return $this->tempMin;
    }

    /**
     * @param int $tempMin
     */
    public function setTempMin(int $tempMin): void
    {
        $this->tempMin = $tempMin;
    }

    /**
     * @return int
     */
    public function getTempMax(): int
    {
        return $this->tempMax;
    }

    /**
     * @param int $tempMax
     */
    public function setTempMax(int $tempMax): void
    {
        $this->tempMax = $tempMax;
    }

    /**
     * @return PartOfDayMeteoDTO
     */
    public function getMeteoMatin(): PartOfDayMeteoDTO
    {
        return $this->meteoMatin;
    }

    /**
     * @param PartOfDayMeteoDTO $meteoMatin
     */
    public function setMeteoMatin(PartOfDayMeteoDTO $meteoMatin): void
    {
        $this->meteoMatin = $meteoMatin;
    }

    /**
     * @return PartOfDayMeteoDTO
     */
    public function getMeteoApresMidi(): PartOfDayMeteoDTO
    {
        return $this->meteoApresMidi;
    }

    /**
     * @param PartOfDayMeteoDTO $meteoApresMidi
     */
    public function setMeteoApresMidi(PartOfDayMeteoDTO $meteoApresMidi): void
    {
        $this->meteoApresMidi = $meteoApresMidi;
    }

    /**
     * @return PartOfDayMeteoDTO
     */
    public function getMeteoSoir(): PartOfDayMeteoDTO
    {
        return $this->meteoSoir;
    }

    /**
     * @param PartOfDayMeteoDTO $meteoSoir
     */
    public function setMeteoSoir(PartOfDayMeteoDTO $meteoSoir): void
    {
        $this->meteoSoir = $meteoSoir;
    }


}