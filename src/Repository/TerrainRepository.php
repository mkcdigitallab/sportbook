<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Terrain;
use Illuminate\Database\Eloquent\Collection;

class TerrainRepository
{
    public function findActive(): Collection
    {
        return Terrain::query()
            ->where('actif', true)
            ->get();
    }

    public function findById(int $id): ?Terrain
    {
        return Terrain::query()->find($id);
    }
}
