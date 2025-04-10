<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
class ParkingController extends AbstractController
{
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
}