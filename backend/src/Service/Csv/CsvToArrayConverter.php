<?php

namespace App\Service\Csv;

use Symfony\Component\HttpFoundation\File\File;

class CsvToArrayConverter
{
    public function __construct(
    ) {}

    public function convert(File $csvFile): array
    {
        $handle = fopen($csvFile->getPathname(), 'r');
        if ($handle === false) {
            throw new \RuntimeException('Impossible to open CSV file.');
        }

        $datas = [];
        $header = null;

        while (($row = fgetcsv($handle, 1000, ',')) !== false) {
            if (!$header) {
                $header = $row;
                continue;
            }

            $data = array_combine($header, $row);
            if (!$data) {
                throw new \RuntimeException('Mapping CSV data error.');
            }


            $datas[] = $data;
        }

        fclose($handle);

        return array_reduce(
            $datas,
            function (array $carry, array $row) {
                $value = $row['sep=;'] ?? null;
                if (!$value) {
                    return $carry;
                }

                // Split by ;
                $parts = explode(';', $value);

                // Ignore malformed lines
                if (count($parts) < 2) {
                    return $carry;
                }

                $key = trim($parts[0]);
                $val = trim($parts[1]);

                // Si c'est un nombre numérique, on le cast
                if (is_numeric($val)) {
                    $val = $val + 0;
                }

                $carry[$key] = $val;
                return $carry;
            },
            []
        );
    }
}