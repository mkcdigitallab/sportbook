<?php

declare(strict_types=1);

namespace App\Validation;

use App\DTO\CreateReservationDTO;

final class ReservationValidator
{
    public function validate(CreateReservationDTO $dto): array
    {
        $errors = [];

        if ($dto->terrainId <= 0) {
            $errors[] = 'Le terrain est invalide.';
        }

        if (trim($dto->clientNom) === '') {
            $errors[] = 'Le nom du client est obligatoire.';
        }

        if ($this->invalidDate($dto->dateDebut)) {
            $errors[] = 'La date de début est invalide.';
        }

        if ($this->invalidDate($dto->dateFin)) {
            $errors[] = 'La date de fin est invalide.';
        }

        return $errors;
    }

    private function invalidDate(string $date): bool
    {
        $dateTime = \DateTime::createFromFormat('Y-m-d H:i:s', $date);

        return $dateTime === false
            || $dateTime->format('Y-m-d H:i:s') !== $date;
    }
}