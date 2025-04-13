<?php

namespace App\Service;

use App\DTO\Meteo\DailyMeteoDTO;
use App\DTO\Meteo\PartOfDayMeteoDTO;
use App\Enum\TimeOfDay;
use App\Service\Csv\CsvDownloaderService;
use App\Service\Csv\CsvToArrayConverter;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class MeteoService
{

    public function __construct(
        private CsvToArrayConverter $csvToDtoConverter,
        private CsvDownloaderService $csvDownloaderService,
        private ParameterBagInterface $parameterBag
    ) {
    }

    public function getCurrentMeteo(string $timeOfDay): array
    {
        $csvFile = $this->csvDownloaderService->download($this->parameterBag->get('meteo_data_url'));

        $dailyMeteoArray = $this->csvToDtoConverter->convert($csvFile);
        /** @var DailyMeteoDTO $dto */
        $dailyMeteoDto = $this->buildDailyMeteoDTO($dailyMeteoArray);
        $partOfDayMeteoDto = $this->getPartialMeteo($dailyMeteoDto, $timeOfDay);
        $partOfDayMeteoData = [
            'dailyTempMin' => $dailyMeteoDto->getTempMin(),
            'dailyTempMax' => $dailyMeteoDto->getTempMax(),
            'tempRange' => $partOfDayMeteoDto->getTempRange(),
            'weather' => $partOfDayMeteoDto->getWeather(),
        ];

        $this->csvDownloaderService->remove($csvFile);
        return $partOfDayMeteoData;
    }
    function buildDailyMeteoDTO(array $data): DailyMeteoDTO
    {
        $dto = new DailyMeteoDTO();
        $dto->setCreated(\DateTimeImmutable::createFromFormat('d-m-Y H:i:s', $data['created']));
        $dto->setTempMin((int) $data['temp_min']);
        $dto->setTempMax((int) $data['temp_max']);

        $dto->setMeteoMatin($this->buildPartDTO($data, '1'));
        $dto->setMeteoApresMidi($this->buildPartDTO($data, '2'));
        $dto->setMeteoSoir($this->buildPartDTO($data, '3'));

        return $dto;
    }

    function buildPartDTO(array $data, string $prefix): PartOfDayMeteoDTO
    {
        $dto = new PartOfDayMeteoDTO();
        $dto->setTitle($data["{$prefix}_title"] ?? '');
        $dto->setWeather($data["{$prefix}_weather"] ?? '');
        $dto->setIcon($data["{$prefix}_icon"] ?? '');
        $dto->setTempIcon($data["{$prefix}_temp_icon"] ?? '');
        $dto->setTempRange($data["{$prefix}_temp_range"] ?? '');
        $dto->setPrecipitation($data["{$prefix}_precipitation"] ?? '');
        $dto->setWindDirectionText($data["{$prefix}_wind_direction_text"] ?? '');
        $dto->setWindDirectionTooltip($data["{$prefix}_wind_direction_tooltip"] ?? '');
        $dto->setWindForce($data["{$prefix}_wind_force"] ?? '');
        $dto->setWindGusts($data["{$prefix}_wind_gusts"] ?? '');
        return $dto;
    }

    function getPartialMeteo(DailyMeteoDTO $meteoDTO, string $dailyMoment){
        switch ($dailyMoment) {
            case TimeOfDay::MORNING->value:
                return $meteoDTO->getMeteoMatin();
            case TimeOfDay::AFTERNOON->value:
                return $meteoDTO->getMeteoApresMidi();
            case TimeOfDay::EVENING->value:
                return $meteoDTO->getMeteoSoir();
            default:
                throw new \InvalidArgumentException(
                    'Invalid time of day provided. Expected: morning, afternoon or evening. Got: ' . $dailyMoment . '.'
                );
        }
    }
}