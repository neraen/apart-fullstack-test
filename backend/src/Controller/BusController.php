<?php

namespace App\Controller;
use App\DTO\LineDTO;
use App\DTO\StationDTO;
use App\DTO\TransportNetworkDTO;
use Psr\Cache\InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class BusController extends AbstractController
{
    public function __construct(private SerializerInterface $serializer)
    {
    }

    /**
     * @throws InvalidArgumentException
     */
    #[Route('/bus/lines', name: 'bus_lines')]
    public function getLines(CacheInterface $cache){

        $cacheKey = 'bus_lines_v1';

        $lines = $cache->get($cacheKey, function (ItemInterface $item) {
            $item->expiresAfter(3600);

            $filePath = "https://web.vdl.lu/autobus/data/messages/Bus_Network.json";
            $json = file_get_contents($filePath);
            $json = preg_replace('/^\xEF\xBB\xBF/', '', $json);

            try {
                /** @var TransportNetworkDTO $dto */
                $dto = $this->serializer->deserialize($json, TransportNetworkDTO::class, 'json');

                return array_map(function (LineDTO $line) {
                    return [
                        'name' => $line->getName(),
                        'image' => $line->getPictureUrl(),
                    ];
                }, $dto->getLines());
            } catch (\Exception $e) {
                throw new \RuntimeException('Erreur de désérialisation : ' . $e->getMessage(), 0, $e);
            }
        });

        return $this->json($lines);
    }

    /**
     * @throws InvalidArgumentException
     */
    #[Route('/bus/stops', name: 'bus_stops')]
    public function getStops(CacheInterface $cache){

        $cacheKey = 'bus_stops_v2';

        $stations = $cache->get($cacheKey, function (ItemInterface $item) {
            $item->expiresAfter(3600);

            $filePath = "https://web.vdl.lu/autobus/data/messages/Bus_Network.json";
            $json = file_get_contents($filePath);
            $json = preg_replace('/^\xEF\xBB\xBF/', '', $json);

            try {
                /** @var TransportNetworkDTO $dto */
                $dto = $this->serializer->deserialize($json, TransportNetworkDTO::class, 'json');

                $lineColors = [];
                foreach ($dto->getLines() as $line) {
                    $lineColors[$line->getNumber()] = $line->getColor();
                }

                return array_map(function (StationDTO $station) use ($lineColors) {
                    $connections = [];
                    if(!empty($station->getConnections())) {
                        foreach ($station->getConnections() as $connection) {
                            $connections[] = [
                                'lineNumber' => $connection['number'],
                                'lineColor' => $lineColors[$connection['number']],
                            ];
                        }
                    }

                    return [
                        'name' => $station->getName(),
                        'connections' => $connections,
                    ];
                }, $dto->getStations());
            } catch (\Exception $e) {
                throw new \RuntimeException('Erreur de désérialisation : ' . $e->getMessage(), 0, $e);
            }
        });

        return $this->json($stations);
    }
}