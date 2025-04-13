<?php

namespace App\DTO;

class ServiceDTO
{
    private bool $ascenseur;
    private bool $wc;
    private bool $wc_handicapes;

    /**
     * @return bool
     */
    public function isAscenseur(): bool
    {
        return $this->ascenseur;
    }

    /**
     * @param bool $ascenseur
     */
    public function setAscenseur(bool $ascenseur): void
    {
        $this->ascenseur = $ascenseur;
    }

    /**
     * @return bool
     */
    public function isWc(): bool
    {
        return $this->wc;
    }

    /**
     * @param bool $wc
     */
    public function setWc(bool $wc): void
    {
        $this->wc = $wc;
    }

    /**
     * @return bool
     */
    public function isWcHandicapes(): bool
    {
        return $this->wc_handicapes;
    }

    /**
     * @param bool $wc_handicapes
     */
    public function setWcHandicapes(bool $wc_handicapes): void
    {
        $this->wc_handicapes = $wc_handicapes;
    }

}