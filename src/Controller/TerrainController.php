<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\TerrainRepository;

final class TerrainController
{
    public function __construct(
        private TerrainRepository $terrainRepository
    ) {
    }

    public function index(): array
    {
        return $this->terrainRepository->findActive()->all();
    }
}