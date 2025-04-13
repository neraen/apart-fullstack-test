<?php

namespace App\DTO\Bus;

class StationDTO
{
   
    private string $name;

   
    private ?string $nameIVU = null;

   
    private ?string $externalId = null;

   
    private ?string $lenght = null;

   
    private ?int $zoneID = null;

   
    private ?string $zoneName = null;

   
    private ?int $hafasMaster = null;

   
    private ?string $hafasDock = null;

   
    private ?string $NomIVU = null;

   
    private ?string $latitude = null;

   
    private ?string $longitude = null;

   
    private ?int $beaconMajor = null;

   
    private ?int $beaconMinor = null;

   
    private ?int $hasTFT = null;

   
    private ?int $hasLivePaper = null;

   
    private ?int $hasDFI = null;

   
    private ?int $hasBeacon = null;

   
    private ?array $listpdfUrls = [];

    /*
     * @var LineDTO[]
     */
    private ?array $lines = [];

    /*
     * @var ConnectionDTO[]
     */
    private ?array $connections = [];

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
     * @return string|null
     */
    public function getNameIVU(): ?string
    {
        return $this->nameIVU;
    }

    /**
     * @param string|null $nameIVU
     */
    public function setNameIVU(?string $nameIVU): void
    {
        $this->nameIVU = $nameIVU;
    }

    /**
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * @param string|null $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @return string|null
     */
    public function getLenght(): ?string
    {
        return $this->lenght;
    }

    /**
     * @param string|null $lenght
     */
    public function setLenght(?string $lenght): void
    {
        $this->lenght = $lenght;
    }

    /**
     * @return int|null
     */
    public function getZoneID(): ?int
    {
        return $this->zoneID;
    }

    /**
     * @param int|null $zoneID
     */
    public function setZoneID(?int $zoneID): void
    {
        $this->zoneID = $zoneID;
    }

    /**
     * @return string|null
     */
    public function getZoneName(): ?string
    {
        return $this->zoneName;
    }

    /**
     * @param string|null $zoneName
     */
    public function setZoneName(?string $zoneName): void
    {
        $this->zoneName = $zoneName;
    }

    /**
     * @return int|null
     */
    public function getHafasMaster(): ?int
    {
        return $this->hafasMaster;
    }

    /**
     * @param int|null $hafasMaster
     */
    public function setHafasMaster(?int $hafasMaster): void
    {
        $this->hafasMaster = $hafasMaster;
    }

    /**
     * @return string|null
     */
    public function getHafasDock(): ?string
    {
        return $this->hafasDock;
    }

    /**
     * @param string|null $hafasDock
     */
    public function setHafasDock(?string $hafasDock): void
    {
        $this->hafasDock = $hafasDock;
    }


    /**
     * @return string|null
     */
    public function getNomIVU(): ?string
    {
        return $this->NomIVU;
    }

    /**
     * @param string|null $NomIVU
     */
    public function setNomIVU(?string $NomIVU): void
    {
        $this->NomIVU = $NomIVU;
    }

    /**
     * @return string|null
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @param string|null $latitude
     */
    public function setLatitude(?string $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * @param string|null $longitude
     */
    public function setLongitude(?string $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return int|null
     */
    public function getBeaconMajor(): ?int
    {
        return $this->beaconMajor;
    }

    /**
     * @param int|null $beaconMajor
     */
    public function setBeaconMajor(?int $beaconMajor): void
    {
        $this->beaconMajor = $beaconMajor;
    }

    /**
     * @return int|null
     */
    public function getBeaconMinor(): ?int
    {
        return $this->beaconMinor;
    }

    /**
     * @param int|null $beaconMinor
     */
    public function setBeaconMinor(?int $beaconMinor): void
    {
        $this->beaconMinor = $beaconMinor;
    }

    /**
     * @return int|null
     */
    public function getHasTFT(): ?int
    {
        return $this->hasTFT;
    }

    /**
     * @param int|null $hasTFT
     */
    public function setHasTFT(?int $hasTFT): void
    {
        $this->hasTFT = $hasTFT;
    }

    /**
     * @return int|null
     */
    public function getHasLivePaper(): ?int
    {
        return $this->hasLivePaper;
    }

    /**
     * @param int|null $hasLivePaper
     */
    public function setHasLivePaper(?int $hasLivePaper): void
    {
        $this->hasLivePaper = $hasLivePaper;
    }

    /**
     * @return int|null
     */
    public function getHasDFI(): ?int
    {
        return $this->hasDFI;
    }

    /**
     * @param int|null $hasDFI
     */
    public function setHasDFI(?int $hasDFI): void
    {
        $this->hasDFI = $hasDFI;
    }

    /**
     * @return int|null
     */
    public function getHasBeacon(): ?int
    {
        return $this->hasBeacon;
    }

    /**
     * @param int|null $hasBeacon
     */
    public function setHasBeacon(?int $hasBeacon): void
    {
        $this->hasBeacon = $hasBeacon;
    }

    /**
     * @return array|null
     */
    public function getListpdfUrls(): ?array
    {
        return $this->listpdfUrls;
    }

    /**
     * @param array|null $listpdfUrls
     */
    public function setListpdfUrls(?array $listpdfUrls): void
    {
        $this->listpdfUrls = $listpdfUrls;
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
    public function getConnections(): ?array
    {
        return $this->connections;
    }

    /**
     * @param array|null $connections
     */
    public function setConnections(?array $connections): void
    {
        $this->connections = $connections;
    }



}