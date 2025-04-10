<?php

namespace App\DTO\Parking;

use Symfony\Component\Validator\Constraints as Assert;

class ParkingDTO
{
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
    public bool $couvert;

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
}
