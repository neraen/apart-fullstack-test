<?php

namespace App\DTO\Parking;

use App\DTO\EntreeDTO;
use App\DTO\InternationalTextDTO;
use App\DTO\QuartierDTO;
use App\DTO\SortieDTO;
use Symfony\Component\Validator\Constraints as Assert;

class LocalisationDTO
{
    #[Assert\NotNull]
    private float $latitude;

    #[Assert\NotNull]
    private float $longitude;


    private QuartierDTO $quartier;
    private InternationalTextDTO $mobilite;

    /**
     * @var EntreeDTO[]
     */
    private array $entree;

    /**
     * @var SortieDTO[]
     */
    private array $sortie;


    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return QuartierDTO
     */
    public function getQuartier(): QuartierDTO
    {
        return $this->quartier;
    }

    /**
     * @param QuartierDTO $quartier
     */
    public function setQuartier(QuartierDTO $quartier): void
    {
        $this->quartier = $quartier;
    }

    /**
     * @return InternationalTextDTO
     */
    public function getMobilite(): InternationalTextDTO
    {
        return $this->mobilite;
    }

    /**
     * @param InternationalTextDTO $mobilite
     */
    public function setMobilite(InternationalTextDTO $mobilite): void
    {
        $this->mobilite = $mobilite;
    }

    /**
     * @return array
     */
    public function getEntree(): array
    {
        return $this->entree;
    }

    /**
     * @param array $entree
     */
    public function setEntree(array $entree): void
    {
        $this->entree = $entree;
    }

    /**
     * @return array
     */
    public function getSortie(): array
    {
        return $this->sortie;
    }

    /**
     * @param array $sortie
     */
    public function setSortie(array $sortie): void
    {
        $this->sortie = $sortie;
    }


}
