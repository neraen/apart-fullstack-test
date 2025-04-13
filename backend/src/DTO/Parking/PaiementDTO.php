<?php

namespace App\DTO;

class PaiementDTO
{
    private string $politique_tarifaire;
    private InternationalTextDTO $tarif;

    private bool $especes;
    private bool $debit;
    private bool $visa;
    private bool $mastercard;
    private bool $payconiq;
    private bool $american_express;
    private bool $indigo_neo;

    /**
     * @return string
     */
    public function getPolitiqueTarifaire(): string
    {
        return $this->politique_tarifaire;
    }

    /**
     * @param string $politique_tarifaire
     */
    public function setPolitiqueTarifaire(string $politique_tarifaire): void
    {
        $this->politique_tarifaire = $politique_tarifaire;
    }

    /**
     * @return InternationalTextDTO
     */
    public function getTarif(): InternationalTextDTO
    {
        return $this->tarif;
    }

    /**
     * @param InternationalTextDTO $tarif
     */
    public function setTarif(InternationalTextDTO $tarif): void
    {
        $this->tarif = $tarif;
    }

    /**
     * @return bool
     */
    public function isEspeces(): bool
    {
        return $this->especes;
    }

    /**
     * @param bool $especes
     */
    public function setEspeces(bool $especes): void
    {
        $this->especes = $especes;
    }

    /**
     * @return bool
     */
    public function isDebit(): bool
    {
        return $this->debit;
    }

    /**
     * @param bool $debit
     */
    public function setDebit(bool $debit): void
    {
        $this->debit = $debit;
    }

    /**
     * @return bool
     */
    public function isVisa(): bool
    {
        return $this->visa;
    }

    /**
     * @param bool $visa
     */
    public function setVisa(bool $visa): void
    {
        $this->visa = $visa;
    }

    /**
     * @return bool
     */
    public function isMastercard(): bool
    {
        return $this->mastercard;
    }

    /**
     * @param bool $mastercard
     */
    public function setMastercard(bool $mastercard): void
    {
        $this->mastercard = $mastercard;
    }

    /**
     * @return bool
     */
    public function isPayconiq(): bool
    {
        return $this->payconiq;
    }

    /**
     * @param bool $payconiq
     */
    public function setPayconiq(bool $payconiq): void
    {
        $this->payconiq = $payconiq;
    }

    /**
     * @return bool
     */
    public function isAmericanExpress(): bool
    {
        return $this->american_express;
    }

    /**
     * @param bool $american_express
     */
    public function setAmericanExpress(bool $american_express): void
    {
        $this->american_express = $american_express;
    }

    /**
     * @return bool
     */
    public function isIndigoNeo(): bool
    {
        return $this->indigo_neo;
    }

    /**
     * @param bool $indigo_neo
     */
    public function setIndigoNeo(bool $indigo_neo): void
    {
        $this->indigo_neo = $indigo_neo;
    }
}