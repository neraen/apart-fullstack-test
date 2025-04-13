<?php

namespace App\Controller;

use App\DTO\Request\CurrentMeteoRequestDTO;
use App\Service\MeteoService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\Routing\Attribute\Route;



class MeteoController extends AbstractController
{
    public function __construct()
    {
    }

    #[Route('/meteo/current', name: 'meteo_current', methods: ['GET'])]
    public function getCurrentMeteo(
        #[MapQueryString] CurrentMeteoRequestDTO $currentMeteoRequestDTO,
        MeteoService $meteoService
    ): JsonResponse
    {
        $partOfDayMeteoData = $meteoService->getCurrentMeteo($currentMeteoRequestDTO->getTimeOfDay());
        return $this->json($partOfDayMeteoData, Response::HTTP_OK);
    }
}