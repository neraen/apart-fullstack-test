<?php

namespace App\DTO\Meteo;

class PartOfDayMeteoDTO
{
    private string $title;
    private string $weather;
    private string|int $icon;
    private string $tempIcon;
    private string $tempRange;
    private string $precipitation;
    private string $windDirectionText;
    private string $windDirectionTooltip;
    private string $windForce;
    private string $windGusts;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getWeather(): string
    {
        return $this->weather;
    }

    /**
     * @param string $weather
     */
    public function setWeather(string $weather): void
    {
        $this->weather = $weather;
    }

    /**
     * @return int|string
     */
    public function getIcon(): int|string
    {
        return $this->icon;
    }

    /**
     * @param int|string $icon
     */
    public function setIcon(int|string $icon): void
    {
        $this->icon = $icon;
    }

    /**
     * @return string
     */
    public function getTempIcon(): string
    {
        return $this->tempIcon;
    }

    /**
     * @param string $tempIcon
     */
    public function setTempIcon(string $tempIcon): void
    {
        $this->tempIcon = $tempIcon;
    }

    /**
     * @return string
     */
    public function getTempRange(): string
    {
        return $this->tempRange;
    }

    /**
     * @param string $tempRange
     */
    public function setTempRange(string $tempRange): void
    {
        $this->tempRange = $tempRange;
    }

    /**
     * @return string
     */
    public function getPrecipitation(): string
    {
        return $this->precipitation;
    }

    /**
     * @param string $precipitation
     */
    public function setPrecipitation(string $precipitation): void
    {
        $this->precipitation = $precipitation;
    }

    /**
     * @return string
     */
    public function getWindDirectionText(): string
    {
        return $this->windDirectionText;
    }

    /**
     * @param string $windDirectionText
     */
    public function setWindDirectionText(string $windDirectionText): void
    {
        $this->windDirectionText = $windDirectionText;
    }

    /**
     * @return string
     */
    public function getWindDirectionTooltip(): string
    {
        return $this->windDirectionTooltip;
    }

    /**
     * @param string $windDirectionTooltip
     */
    public function setWindDirectionTooltip(string $windDirectionTooltip): void
    {
        $this->windDirectionTooltip = $windDirectionTooltip;
    }

    /**
     * @return string
     */
    public function getWindForce(): string
    {
        return $this->windForce;
    }

    /**
     * @param string $windForce
     */
    public function setWindForce(string $windForce): void
    {
        $this->windForce = $windForce;
    }

    /**
     * @return string
     */
    public function getWindGusts(): string
    {
        return $this->windGusts;
    }

    /**
     * @param string $windGusts
     */
    public function setWindGusts(string $windGusts): void
    {
        $this->windGusts = $windGusts;
    }


}