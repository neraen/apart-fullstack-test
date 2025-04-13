<?php

namespace App\DTO\Parking;

use App\DTO\DiversDTO;
use App\DTO\HorairesDTO;
use App\DTO\InternationalTextDTO;
use App\DTO\NominalDTO;
use App\DTO\PaiementDTO;
use App\DTO\RestrictionDTO;
use App\DTO\ServiceDTO;
use Symfony\Component\Validator\Constraints as Assert;

class ParkingDTO
{

    private int $id;
    private string $titre;
    private int $total;
    private int $actuel;
    private int $tendance;
    private bool $ouvert;
    private bool $complet;
    private bool $panne;
    private ServiceDTO $service;
    private NominalDTO $nominal;
    private PaiementDTO $paiement;
    private RestrictionDTO $restrictions;
    private InternationalTextDTO $message;
    private InternationalTextDTO $ouverture;
    private DiversDTO $divers;

    #[Assert\NotBlank]
    public string $code;

    #[Assert\NotBlank]
    public string $nom;

    #[Assert\NotBlank]
    public string $type;

    #[Assert\NotBlank]
    public string $etat;

    #[Assert\NotBlank]
    public string $adresse;

    #[Assert\Valid]
    public LocalisationDTO $localisation;

    #[Assert\Valid]
    public CapaciteDTO $capacite;

    #[Assert\Valid]
    public array $places; // array of PlaceDTO

    #[Assert\Valid]
    public HorairesDTO $horaires;

    #[Assert\NotNull]
    public bool $surveillance;

    #[Assert\NotNull]
    public bool $accessibiliteHandicapes;

    #[Assert\NotNull]
    public float $tarifHoraire;

    #[Assert\NotNull]
    public float $tarifJournee;

    #[Assert\NotNull]
    public bool $abonnementDisponible;

    #[Assert\NotBlank]
    public string $gestionnaire;

    #[Assert\DateTime]
    public string $dateDerniereMiseAJour;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getEtat(): string
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat(string $etat): void
    {
        $this->etat = $etat;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return LocalisationDTO
     */
    public function getLocalisation(): LocalisationDTO
    {
        return $this->localisation;
    }

    /**
     * @param LocalisationDTO $localisation
     */
    public function setLocalisation(LocalisationDTO $localisation): void
    {
        $this->localisation = $localisation;
    }

    /**
     * @return CapaciteDTO
     */
    public function getCapacite(): CapaciteDTO
    {
        return $this->capacite;
    }

    /**
     * @param CapaciteDTO $capacite
     */
    public function setCapacite(CapaciteDTO $capacite): void
    {
        $this->capacite = $capacite;
    }

    /**
     * @return array
     */
    public function getPlaces(): array
    {
        return $this->places;
    }

    /**
     * @param array $places
     */
    public function setPlaces(array $places): void
    {
        $this->places = $places;
    }

    /**
     * @return HorairesDTO
     */
    public function getHoraires(): HorairesDTO
    {
        return $this->horaires;
    }

    /**
     * @param HorairesDTO $horaires
     */
    public function setHoraires(HorairesDTO $horaires): void
    {
        $this->horaires = $horaires;
    }

    /**
     * @return bool
     */
    public function isSurveillance(): bool
    {
        return $this->surveillance;
    }

    /**
     * @param bool $surveillance
     */
    public function setSurveillance(bool $surveillance): void
    {
        $this->surveillance = $surveillance;
    }

    /**
     * @return bool
     */
    public function isCouvert(): bool
    {
        return $this->couvert;
    }

    /**
     * @param bool $couvert
     */
    public function setCouvert(bool $couvert): void
    {
        $this->couvert = $couvert;
    }

    /**
     * @return bool
     */
    public function isAccessibiliteHandicapes(): bool
    {
        return $this->accessibiliteHandicapes;
    }

    /**
     * @param bool $accessibiliteHandicapes
     */
    public function setAccessibiliteHandicapes(bool $accessibiliteHandicapes): void
    {
        $this->accessibiliteHandicapes = $accessibiliteHandicapes;
    }

    /**
     * @return float
     */
    public function getTarifHoraire(): float
    {
        return $this->tarifHoraire;
    }

    /**
     * @param float $tarifHoraire
     */
    public function setTarifHoraire(float $tarifHoraire): void
    {
        $this->tarifHoraire = $tarifHoraire;
    }

    /**
     * @return float
     */
    public function getTarifJournee(): float
    {
        return $this->tarifJournee;
    }

    /**
     * @param float $tarifJournee
     */
    public function setTarifJournee(float $tarifJournee): void
    {
        $this->tarifJournee = $tarifJournee;
    }

    /**
     * @return bool
     */
    public function isAbonnementDisponible(): bool
    {
        return $this->abonnementDisponible;
    }

    /**
     * @param bool $abonnementDisponible
     */
    public function setAbonnementDisponible(bool $abonnementDisponible): void
    {
        $this->abonnementDisponible = $abonnementDisponible;
    }

    /**
     * @return string
     */
    public function getGestionnaire(): string
    {
        return $this->gestionnaire;
    }

    /**
     * @param string $gestionnaire
     */
    public function setGestionnaire(string $gestionnaire): void
    {
        $this->gestionnaire = $gestionnaire;
    }

    /**
     * @return string
     */
    public function getDateDerniereMiseAJour(): string
    {
        return $this->dateDerniereMiseAJour;
    }

    /**
     * @param string $dateDerniereMiseAJour
     */
    public function setDateDerniereMiseAJour(string $dateDerniereMiseAJour): void
    {
        $this->dateDerniereMiseAJour = $dateDerniereMiseAJour;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * @return int
     */
    public function getActuel(): int
    {
        return $this->actuel;
    }

    /**
     * @param int $actuel
     */
    public function setActuel(int $actuel): void
    {
        $this->actuel = $actuel;
    }

    /**
     * @return int
     */
    public function getTendance(): int
    {
        return $this->tendance;
    }

    /**
     * @param int $tendance
     */
    public function setTendance(int $tendance): void
    {
        $this->tendance = $tendance;
    }

    /**
     * @return bool
     */
    public function isOuvert(): bool
    {
        return $this->ouvert;
    }

    /**
     * @param bool $ouvert
     */
    public function setOuvert(bool $ouvert): void
    {
        $this->ouvert = $ouvert;
    }

    /**
     * @return bool
     */
    public function isComplet(): bool
    {
        return $this->complet;
    }

    /**
     * @param bool $complet
     */
    public function setComplet(bool $complet): void
    {
        $this->complet = $complet;
    }

    /**
     * @return bool
     */
    public function isPanne(): bool
    {
        return $this->panne;
    }

    /**
     * @param bool $panne
     */
    public function setPanne(bool $panne): void
    {
        $this->panne = $panne;
    }

    /**
     * @return ServiceDTO
     */
    public function getService(): ServiceDTO
    {
        return $this->service;
    }

    /**
     * @param ServiceDTO $service
     */
    public function setService(ServiceDTO $service): void
    {
        $this->service = $service;
    }

    /**
     * @return NominalDTO
     */
    public function getNominal(): NominalDTO
    {
        return $this->nominal;
    }

    /**
     * @param NominalDTO $nominal
     */
    public function setNominal(NominalDTO $nominal): void
    {
        $this->nominal = $nominal;
    }

    /**
     * @return PaiementDTO
     */
    public function getPaiement(): PaiementDTO
    {
        return $this->paiement;
    }

    /**
     * @param PaiementDTO $paiement
     */
    public function setPaiement(PaiementDTO $paiement): void
    {
        $this->paiement = $paiement;
    }

    /**
     * @return RestrictionDTO
     */
    public function getRestrictions(): RestrictionDTO
    {
        return $this->restrictions;
    }

    /**
     * @param RestrictionDTO $restrictions
     */
    public function setRestrictions(RestrictionDTO $restrictions): void
    {
        $this->restrictions = $restrictions;
    }

    /**
     * @return InternationalTextDTO
     */
    public function getMessage(): InternationalTextDTO
    {
        return $this->message;
    }

    /**
     * @param InternationalTextDTO $message
     */
    public function setMessage(InternationalTextDTO $message): void
    {
        $this->message = $message;
    }

    /**
     * @return InternationalTextDTO
     */
    public function getOuverture(): InternationalTextDTO
    {
        return $this->ouverture;
    }

    /**
     * @param InternationalTextDTO $ouverture
     */
    public function setOuverture(InternationalTextDTO $ouverture): void
    {
        $this->ouverture = $ouverture;
    }

    /**
     * @return DiversDTO
     */
    public function getDivers(): DiversDTO
    {
        return $this->divers;
    }

    /**
     * @param DiversDTO $divers
     */
    public function setDivers(DiversDTO $divers): void
    {
        $this->divers = $divers;
    }


}
