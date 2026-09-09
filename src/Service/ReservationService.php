<?php

declare(strict_types=1);

namespace App\Service;

use App\DTO\CreateReservationDTO;
use App\DTO\ReservationResponseDTO;
use App\Repository\ReservationRepository;
use App\Repository\TerrainRepository;
use App\Validation\ReservationValidator;
use RuntimeException;

final class ReservationService
{
    public function __construct(
        private TerrainRepository $terrainRepository,
        private ReservationRepository $reservationRepository,
        private ReservationValidator $validator,
    ) {
    }

    public function create(CreateReservationDTO $dto): ReservationResponseDTO
    {
        // 1. Validation des données reçues
        $errors = $this->validator->validate($dto);

        if ($errors !== []) {
            throw new RuntimeException(implode(' ', $errors));
        }

        // 2. Conversion des dates
        $dateDebut = new \DateTimeImmutable($dto->dateDebut);
        $dateFin = new \DateTimeImmutable($dto->dateFin);
        $maintenant = new \DateTimeImmutable();

        // 3. La réservation doit commencer dans le futur
        if ($dateDebut <= $maintenant) {
            throw new RuntimeException(
                'La réservation doit commencer dans le futur.'
            );
        }

        // 4. La date de début doit être avant la date de fin
        if ($dateDebut >= $dateFin) {
            throw new RuntimeException(
                'La date de début doit être avant la date de fin.'
            );
        }

        // 5. Vérification de la durée
        $durationSeconds = $dateFin->getTimestamp() - $dateDebut->getTimestamp();

        if ($durationSeconds < 1800) {
            throw new RuntimeException(
                'La durée minimale est de 30 minutes.'
            );
        }

        if ($durationSeconds > 7200) {
            throw new RuntimeException(
                'La durée maximale est de 2 heures.'
            );
        }

        // 6. Vérification du terrain
        $terrain = $this->terrainRepository->findById($dto->terrainId);

        if ($terrain === null) {
            throw new RuntimeException('Le terrain demandé n existe pas.');
        }

        if (!$terrain->actif) {
            throw new RuntimeException('Le terrain demandé est inactif.');
        }

        // 7. Recherche des réservations du même terrain le même jour
        $reservations = $this->reservationRepository->findByTerrainAndDay(
            $dto->terrainId,
            $dateDebut->format('Y-m-d')
        );

        // 8. Vérification des chevauchements
        foreach ($reservations as $reservation) {
            if ($reservation->statut !== 'confirmee') {
                continue;
            }

            $reservationDebut = $reservation->date_debut;
            $reservationFin = $reservation->date_fin;

            $chevauchement =
                $dateDebut < $reservationFin
                && $dateFin > $reservationDebut;

            if ($chevauchement) {
                throw new RuntimeException(
                    'Le terrain est déjà réservé sur cette période.'
                );
            }
        }

        // 9. Calcul du tarif total
        $durationHours = $durationSeconds / 3600;

        $tarifTotal = $durationHours * (float) $terrain->tarif_horaire;

        // 10. Création de la réservation
        $reservation = $this->reservationRepository->create([
            ...$dto->toArray(),
            'statut' => 'confirmee',
            'tarif_total' => $tarifTotal,
        ]);

        // 11. Transformation du Model en DTO de réponse
        return ReservationResponseDTO::fromModel($reservation);
    }
}