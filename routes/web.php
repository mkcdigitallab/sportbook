<?php

declare(strict_types=1);

use FastRoute\RouteCollector;
use App\Controller\TerrainController;
use App\Controller\ReservationController;

return static function (RouteCollector $router): void {

    // Afficher les terrains actifs
    $router->get('/terrains', [TerrainController::class, 'index']);

    // Créer une réservation
    $router->post('/reservations', [ReservationController::class, 'create']);
};