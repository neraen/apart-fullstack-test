<?php

namespace App\Controller;
use App\Service\BusService;
use App\DTO\Request\PaginatedRequestDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\Routing\Attribute\Route;

class BusController extends AbstractController
{
    public function __construct(private BusService $busService)
    {
    }

    #[Route('/bus/lines', name: 'bus_lines', methods: ['GET'])]
    public function getLines(#[MapQueryString] PaginatedRequestDTO $request){
        $page = max(1, $request->getPage());
        $limit = max(1, $request->getLimit());
        $offset = ($page - 1) * $limit;
        $lines = $this->busService->GetAllLines();
        $total = count($lines);
        $items = array_slice($lines, $offset, $limit);
        return $this->json([
            'items' => $items,
            'total' => $total,
            'page' => $page,
            'limit' => $limit,
            'hasMore' => ($offset + $limit) < $total,
        ], Response::HTTP_OK);
    }


    #[Route('/bus/stops', name: 'bus_stops', methods: ['GET'])]
    public function getStops(#[MapQueryString] PaginatedRequestDTO $request){
        $page = max(1, $request->getPage());
        $limit = max(1, $request->getLimit());
        $offset = ($page - 1) * $limit;
        $stations = $this->busService->GetAllStationsAndConnections();
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