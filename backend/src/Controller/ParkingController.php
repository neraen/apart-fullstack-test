<?php

namespace App\Controller;
use App\DTO\Request\PaginatedRequestDTO;
use App\Service\ParkingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\Routing\Attribute\Route;


class ParkingController extends AbstractController
{
    public function __construct(private ParkingService $parkingService)
    {
    }


    #[Route('/parkings', name: 'parkings', methods: ['GET'])]
    public function getParkings(#[MapQueryString] PaginatedRequestDTO $request){
        $page = max(1, $request->getPage());
        $limit = max(1, $request->getLimit());
        $offset = ($page - 1) * $limit;
        $stations = $this->parkingService->getAllParkings();
        $total = count($stations);
        $items = array_slice($stations, $offset, $limit);

        return $this->json([
            'items' => $items,
            'total' => $total,
            'page' => $page,
            'limit' => $limit,
            'hasMore' => ($offset + $limit) < $total,
        ], Response::HTTP_OK);
    }
}