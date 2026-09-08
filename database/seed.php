<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Model\Terrain;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');

$dotenv->load();

$database = require_once dirname(__DIR__) . '/config/database.php';
$database();

$terrain = [
    [
        'nom' => 'Court Squash A',
        'description' => 'Court simple',
        'tarif_horaire' => 10.00,
        'actif' => true,
    ],
    [
        'nom' => 'Court Padel 1',
        'description' => 'Court couvert, éclairage LED',
        'tarif_horaire' => 15.00,
        'actif' => true,
    ],
    [
        'nom' => 'Court Padel 2',
        'description' => 'Court extérieur, éclairage LED',
        'tarif_horaire' => 12.00,
        'actif' => true,
    ],
    [
        'nom' => 'Court Tennis 1',
        'description' => 'Court couvert, éclairage LED',
        'tarif_horaire' => 20.00,
        'actif' => true,
    ],
    [
        'nom' => 'Court Tennis 2',
        'description' => 'Court extérieur, éclairage LED',
        'tarif_horaire' => 18.00,
        'actif' => true,
    ],
    [
        'nom' => 'Court Badminton 1',
        'description' => 'Court couvert, éclairage LED',
        'tarif_horaire' => 8.00,
        'actif' => true,
    ],
    [
        'nom' => 'Court Badminton 2',
        'description' => 'Court couvert, éclairage LED',
        'tarif_horaire' => 8.00,
        'actif' => true,
    ],
];

foreach ($terrain as $terrain) {
    Terrain::create($terrain);
}

echo count($terrain) . " terrains insérés avec succès." . PHP_EOL;