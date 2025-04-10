<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class LineDTO
{
    private ?string $number = null;

    private ?string $name = null;

    private ?string $pdfUrl = null;
 
    private ?string $color = null;

    private ?string $pictureUrl = null;

    private ?bool $isSchoolBusLine = null;

    /**
     * @var DirectionDTO[]
     */
    private ?array $directions = [];

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param string|null $number
     */
    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getPdfUrl(): ?string
    {
        return $this->pdfUrl;
    }

    /**
     * @param string|null $pdfUrl
     */
    public function setPdfUrl(?string $pdfUrl): void
    {
        $this->pdfUrl = $pdfUrl;
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color
     */
    public function setColor(?string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string|null
     */
    public function getPictureUrl(): ?string
    {
        return $this->pictureUrl;
    }

    /**
     * @param string|null $pictureUrl
     */
    public function setPictureUrl(?string $pictureUrl): void
    {
        $this->pictureUrl = $pictureUrl;
    }

    /**
     * @return bool|null
     */
    public function getIsSchoolBusLine(): ?bool
    {
        return $this->isSchoolBusLine;
    }

    /**
     * @param bool|null $isSchoolBusLine
     */
    public function setIsSchoolBusLine(?bool $isSchoolBusLine): void
    {
        $this->isSchoolBusLine = $isSchoolBusLine;
    }

    /**
     * @return array|null
     */
    public function getDirections(): ?array
    {
        return $this->directions;
    }

    /**
     * @param array|null $directions
     */
    public function setDirections(?array $directions): void
    {
        $this->directions = $directions;
    }

}
