<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class HorairesDTO
{
    #[Assert\NotBlank]
    private string $jours;

    #[Assert\NotBlank]
    private string $heures;

    /**
     * @return string
     */
    public function getJours(): string
    {
        return $this->jours;
    }

    /**
     * @param string $jours
     */
    public function setJours(string $jours): void
    {
        $this->jours = $jours;
    }

    /**
     * @return string
     */
    public function getHeures(): string
    {
        return $this->heures;
    }

    /**
     * @param string $heures
     */
    public function setHeures(string $heures): void
    {
        $this->heures = $heures;
    }


}

