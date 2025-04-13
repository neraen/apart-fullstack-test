<?php

namespace App\DTO;

class QuartierDTO
{
    private string $fr;
    private string $de;
    private string $en;

    /**
     * @return string
     */
    public function getFr(): string
    {
        return $this->fr;
    }

    /**
     * @param string $fr
     */
    public function setFr(string $fr): void
    {
        $this->fr = $fr;
    }

    /**
     * @return string
     */
    public function getDe(): string
    {
        return $this->de;
    }

    /**
     * @param string $de
     */
    public function setDe(string $de): void
    {
        $this->de = $de;
    }

    /**
     * @return string
     */
    public function getEn(): string
    {
        return $this->en;
    }

    /**
     * @param string $en
     */
    public function setEn(string $en): void
    {
        $this->en = $en;
    }


}