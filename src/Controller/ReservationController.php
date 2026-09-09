<?php

declare(strict_types=1);

namespace App\Controller;

use App\DTO\CreateReservationDTO;
use App\Service\ReservationService;

final class ReservationController
{
    public function __construct(
        private ReservationService $reservationService
    ) {
    }

    public function create(CreateReservationDTO $dto): array
    {
        return $this->reservationService
            ->create($dto)
            ->toArray();
    }
}