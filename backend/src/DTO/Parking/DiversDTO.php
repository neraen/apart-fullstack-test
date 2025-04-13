<?php

namespace App\DTO;

class DiversDTO
{
    private bool $park_and_ride;
    private string $telephone;
    private string $photo_url;

    /**
     * @return bool
     */
    public function isParkAndRide(): bool
    {
        return $this->park_and_ride;
    }

    /**
     * @param bool $park_and_ride
     */
    public function setParkAndRide(bool $park_and_ride): void
    {
        $this->park_and_ride = $park_and_ride;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getPhotoUrl(): string
    {
        return $this->photo_url;
    }

    /**
     * @param string $photo_url
     */
    public function setPhotoUrl(string $photo_url): void
    {
        $this->photo_url = $photo_url;
    }
}