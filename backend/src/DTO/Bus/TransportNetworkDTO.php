<?php

namespace App\DTO\Bus;

class TransportNetworkDTO
{

    private ?string $name = null;

    private ?string $source = null;

    private ?string $networkPdfUrl = null;

    /**
     * @var LineDTO[]
     */
    private ?array $lines = [];

    /**
     * @var StationDTO[]
     */
    private ?array $stations = [];

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return string|null
     */
    public function getNetworkPdfUrl(): ?string
    {
        return $this->networkPdfUrl;
    }

    /**
     * @param string|null $networkPdfUrl
     */
    public function setNetworkPdfUrl(?string $networkPdfUrl): void
    {
        $this->networkPdfUrl = $networkPdfUrl;
    }

    /**
     * @return array|null
     */
    public function getLines(): ?array
    {
        return $this->lines;
    }

    /**
     * @param array|null $lines
     */
    public function setLines(?array $lines): void
    {
        $this->lines = $lines;
    }

    /**
     * @return array|null
     */
    public function getStations(): ?array
    {
        return $this->stations;
    }

    /**
     * @param array|null $stations
     */
    public function setStations(?array $stations): void
    {
        $this->stations = $stations;
    }



}
