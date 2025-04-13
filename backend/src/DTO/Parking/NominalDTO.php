<?php

namespace App\DTO;

use Symfony\Component\Serializer\Attribute\SerializedName;

class NominalDTO
{
    private int $handicapes;
    private int $femmes;
    #[SerializedName("e-cars")]
    private int $eCars;
    private int $car_sharing;
    private int $velos;
    private int $motos;
    private int $autocars;


    public function getHandicapes(): int
    {
        return $this->handicapes;
    }

    public function setHandicapes(int $handicapes): void
    {
        $this->handicapes = $handicapes;
    }

    public function getFemmes(): int
    {
        return $this->femmes;
    }

    public function setFemmes(int $femmes): void
    {
        $this->femmes = $femmes;
    }

    public function getCarSharing(): int
    {
        return $this->car_sharing;
    }

    public function setCarSharing(int $car_sharing): void
    {
        $this->car_sharing = $car_sharing;
    }

    public function getVelos(): int
    {
        return $this->velos;
    }

    public function setVelos(int $velos): void
    {
        $this->velos = $velos;
    }

    public function getMotos(): int
    {
        return $this->motos;
    }

    public function setMotos(int $motos): void
    {
        $this->motos = $motos;
    }

    public function getAutocars(): int
    {
        return $this->autocars;
    }

    public function setAutocars(int $autocars): void
    {
        $this->autocars = $autocars;
    }

    public function getECars(): int
    {
        return $this->eCars;
    }

    public function setECars(int $eCars): void
    {
        $this->eCars = $eCars;
    }


}