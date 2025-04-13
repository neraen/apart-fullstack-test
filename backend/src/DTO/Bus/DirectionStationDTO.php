<?php

namespace App\DTO\Bus;

class DirectionStationDTO
{
    private string $name;
    private string $nameIVU;
    private string $ExtID;
    private string $Lenght;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNameIVU(): string
    {
        return $this->nameIVU;
    }

    /**
     * @param string $nameIVU
     */
    public function setNameIVU(string $nameIVU): void
    {
        $this->nameIVU = $nameIVU;
    }

    /**
     * @return string
     */
    public function getExtID(): string
    {
        return $this->ExtID;
    }

    /**
     * @param string $ExtID
     */
    public function setExtID(string $ExtID): void
    {
        $this->ExtID = $ExtID;
    }

    /**
     * @return string
     */
    public function getLenght(): string
    {
        return $this->Lenght;
    }

    /**
     * @param string $Lenght
     */
    public function setLenght(string $Lenght): void
    {
        $this->Lenght = $Lenght;
    }


}