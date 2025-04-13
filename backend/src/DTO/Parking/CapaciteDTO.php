<?php

namespace App\DTO\Parking;

use Symfony\Component\Validator\Constraints as Assert;

class CapaciteDTO
{
    #[Assert\NotNull]
    private int $total;

    #[Assert\NotNull]
    private int $disponibles;

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * @return int
     */
    public function getDisponibles(): int
    {
        return $this->disponibles;
    }

    /**
     * @param int $disponibles
     */
    public function setDisponibles(int $disponibles): void
    {
        $this->disponibles = $disponibles;
    }


}
