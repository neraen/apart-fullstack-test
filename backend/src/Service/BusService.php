<?php

namespace App\Service;

use App\DTO\Bus\LineDTO;
use App\DTO\Bus\StationDTO;
use App\DTO\Bus\TransportNetworkDTO;
use App\Utils\TypeConverter;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class BusService
{
    public function __construct(
        private SerializerInterface $serializer,
        private CacheInterface $cache,
        private ParameterBagInterface $parameterBag
    )
    {
    }
    public function GetAllStationsAndConnections(): array
    {
        $cacheKey = 'bus_stops_v2';

        $stations = $this->cache->get($cacheKey, function (ItemInterface $item) {
            $item->expiresAfter(3600);

            try {
                /** @var TransportNetworkDTO $transportNetworkDto */
                $transportNetworkDto = $this->getSerializedData();

                $lineColors = [];
                foreach ($transportNetworkDto->getLines() as $line) {
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
                        'latitude' => TypeConverter::stringToFloat($station->getLatitude()),
                        'longitude' => TypeConverter::stringToFloat($station->getLongitude()),
                        'connections' => $connections,
                    ];
                }, $transportNetworkDto->getStations());
            } catch (\Exception $e) {
                throw new \RuntimeException('Erreur de désérialisation : ' . $e->getMessage(), 0, $e);
            }
        });

        return $stations;
    }

    public function GetAllLines(): array
    {
        $cacheKey = 'bus_lines_v2';

        $lines = $this->cache->get($cacheKey, function (ItemInterface $item) {
            $item->expiresAfter(3600);
            try {
                /** @var TransportNetworkDTO $dto */
                $transportNetworkDto = $this->getSerializedData();

                return array_map(function (LineDTO $line) {
                    return [
                        'name' => $line->getName(),
                        'image' => $line->getPictureUrl(),
                    ];
                }, $transportNetworkDto->getLines());

            } catch (\Exception $e) {
                throw new \RuntimeException('Deserialization error : ' . $e->getMessage(), 0, $e);
            }
        });

        return $lines;
    }

    private function getSerializedData(): TransportNetworkDTO
    {
        $json = file_get_contents($this->parameterBag->get('bus_data_url'));
        $json = preg_replace('/^\xEF\xBB\xBF/', '', $json);
        return $this->serializer->deserialize($json, TransportNetworkDTO::class, 'json');
    }
}