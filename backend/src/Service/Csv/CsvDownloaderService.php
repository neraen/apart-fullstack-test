<?php

namespace App\Service\Csv;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Filesystem\Filesystem;

class CsvDownloaderService
{
    private string $tempDirectory;
    private Filesystem $filesystem;

    public function __construct(
        private HttpClientInterface $httpClient
    ) {
        $this->tempDirectory = sys_get_temp_dir(); // ou personnalise un dossier ex: '/var/tmp/my-app'
        $this->filesystem = new Filesystem();
    }

    /**
     * Télécharge un fichier CSV depuis une URL et retourne un objet File Symfony
     */
    public function download(string $url): File
    {
        $response = $this->httpClient->request('GET', $url);

        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException('Erreur HTTP lors du téléchargement du fichier CSV.');
        }

        $fileName = uniqid('csv_', true) . '.csv';
        $filePath = $this->tempDirectory . DIRECTORY_SEPARATOR . $fileName;

        $this->filesystem->dumpFile($filePath, $response->getContent());

        return new File($filePath);
    }

    /**
     * Supprime un fichier temporaire
     */
    public function remove(File $file): void
    {
        $this->filesystem->remove($file->getPathname());
    }
}
