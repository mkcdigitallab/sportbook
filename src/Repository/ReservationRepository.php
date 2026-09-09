<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Reservation;
use Illuminate\Database\Eloquent\Collection;

class ReservationRepository
{
    public function findById(int $id): ?Reservation
    {
        return Reservation::query()->find($id);
    }

    public function findByTerrainAndDay(int $terrainId, string $date): Collection
    {
        return Reservation::query()
            ->where('terrain_id', $terrainId)
            ->whereDate('date_debut', $date)
            ->get();
    }

    public function create(array $data): Reservation
    {
        return Reservation::query()->create($data);
    }

    public function cancel(Reservation $reservation): bool
    {
        return $reservation->update([
            'statut' => 'annulee',
        ]);
    }
}