<?php

declare(strict_types=1);

namespace App\DTO;

final class CreateReservationDTO
{
    public function __construct(
        public readonly int $terrainId,
        public readonly string $clientNom,
        public readonly string $dateDebut,
        public readonly string $dateFin,
    ) {
    }

    public function toArray(): array
    {
        return [
            'terrain_id' => $this->terrainId,
            'client_nom' => $this->clientNom,
            'date_debut' => $this->dateDebut,
            'date_fin' => $this->dateFin,
        ];
    }
}