<?php

namespace App\Service;

use App\DTO\Parking\ParkingDTO;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class ParkingService
{
    public function __construct(
        private SerializerInterface $serializer,
        private CacheInterface $cache,
        private ParameterBagInterface $parameterBag
    )
    {
    }
    public function getAllParkings(){
        $parkingsJson = file_get_contents($this->parameterBag->get('parking_data_url'));
        $parkingsJson = preg_replace('/^\xEF\xBB\xBF/', '', $parkingsJson);
        $parkingsArray = json_decode($parkingsJson, true);


        $sanitizedDate = str_replace([':', ',', '/', '\\', '@', ' '], '_', $parkingsArray["last_build_date"]);
        $cacheKey = 'parkings_'.$sanitizedDate;

        $parkings = $this->cache->get($cacheKey, function (ItemInterface $item) use ($parkingsArray) {
            $item->expiresAfter(3600);

            $parkingsArray = array_values($parkingsArray['parking']);

            try {
                /** @var ParkingDTO[] $parkingsDto */
                $parkingsDto = $this->serializer->denormalize($parkingsArray, ParkingDTO::class . '[]');
                return array_map(function ($parkingDto){
                    return [
                        "name" => $parkingDto->getTitre(),
                        "image" => $parkingDto->getDivers()->getPhotoUrl(),
                        "current" => $parkingDto->getActuel(),
                        "total" => $parkingDto->getTotal(),
                        "open" => $parkingDto->isOuvert(),
                    ];
                }, $parkingsDto);

            } catch (\Exception $e) {
                throw new \RuntimeException('Denormalization error : ' . $e->getMessage(), 0, $e);
            }
        });

        return $parkings;
    }
}