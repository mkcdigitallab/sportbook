<?php

declare(strict_types=1);

namespace App\DTO;

use App\Model\Reservation;

final class ReservationResponseDTO
{
    public function __construct(
        public readonly int $id,
        public readonly int $terrainId,
        public readonly string $clientNom,
        public readonly string $dateDebut,
        public readonly string $dateFin,
        public readonly string $statut,
        public readonly float $tarifTotal,
    ) {
    }

    public static function fromModel(Reservation $reservation): self
    {
        return new self(
            id: $reservation->id,
            terrainId: $reservation->terrain_id,
            clientNom: $reservation->client_nom,
            dateDebut: $reservation->date_debut->format('Y-m-d H:i:s'),
            dateFin: $reservation->date_fin->format('Y-m-d H:i:s'),
            statut: $reservation->statut,
            tarifTotal: $reservation->tarif_total,
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'terrain_id' => $this->terrainId,
            'client_nom' => $this->clientNom,
            'date_debut' => $this->dateDebut,
            'date_fin' => $this->dateFin,
            'statut' => $this->statut,
            'tarif_total' => $this->tarifTotal,
        ];
    }
}
