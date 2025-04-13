<?php

namespace App\DTO;

class RestrictionDTO
{
    private bool $gpl;
    private bool $gnc;
    private bool $clous;
    private bool $moto;
    private bool $remorque;
    private string $max_poids;
    private string $max_hauteur;

    /**
     * @return bool
     */
    public function isGpl(): bool
    {
        return $this->gpl;
    }

    /**
     * @param bool $gpl
     */
    public function setGpl(bool $gpl): void
    {
        $this->gpl = $gpl;
    }

    /**
     * @return bool
     */
    public function isGnc(): bool
    {
        return $this->gnc;
    }

    /**
     * @param bool $gnc
     */
    public function setGnc(bool $gnc): void
    {
        $this->gnc = $gnc;
    }

    /**
     * @return bool
     */
    public function isClous(): bool
    {
        return $this->clous;
    }

    /**
     * @param bool $clous
     */
    public function setClous(bool $clous): void
    {
        $this->clous = $clous;
    }

    /**
     * @return bool
     */
    public function isMoto(): bool
    {
        return $this->moto;
    }

    /**
     * @param bool $moto
     */
    public function setMoto(bool $moto): void
    {
        $this->moto = $moto;
    }

    /**
     * @return bool
     */
    public function isRemorque(): bool
    {
        return $this->remorque;
    }

    /**
     * @param bool $remorque
     */
    public function setRemorque(bool $remorque): void
    {
        $this->remorque = $remorque;
    }

    /**
     * @return string
     */
    public function getMaxPoids(): string
    {
        return $this->max_poids;
    }

    /**
     * @param string $max_poids
     */
    public function setMaxPoids(string $max_poids): void
    {
        $this->max_poids = $max_poids;
    }

    /**
     * @return string
     */
    public function getMaxHauteur(): string
    {
        return $this->max_hauteur;
    }

    /**
     * @param string $max_hauteur
     */
    public function setMaxHauteur(string $max_hauteur): void
    {
        $this->max_hauteur = $max_hauteur;
    }
}