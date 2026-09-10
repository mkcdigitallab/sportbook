<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use App\Model\Terrain;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');

$dotenv->safeLoad();

$database = require_once dirname(__DIR__) . '/config/database.php';
$database([
    'driver' => $_ENV['DB_DRIVER'],
    'host' => $_ENV['DB_HOST'],
    'port' => $_ENV['DB_PORT'],
    'database' => $_ENV['DB_DATABASE'],
    'username' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD'],
]);
$terrains = [
    [
        'nom' => 'Terrain de football',
        'sport' => 'Football',
        'tarif_horaire' => 50.00,
        'actif' => true,
    ],
    [
        'nom' => 'Terrain de basketball',
        'sport' => 'Basketball',
        'tarif_horaire' => 40.00,
        'actif' => true,
    ],
    [
        'nom' => 'Terrain de tennis',
        'sport' => 'Tennis',
        'tarif_horaire' => 30.00,
        'actif' => true,
    ],
];

foreach ($terrains as $terrain) {
    Terrain::create($terrain);
}

echo count($terrains) . " terrains insérés avec succès." . PHP_EOL;