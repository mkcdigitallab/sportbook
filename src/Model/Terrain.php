<?php

declare(strict_types=1);

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Terrain extends Model
{
    protected $table = 'terrains';

    public $timestamps = false;

    protected $fillable = [
        'nom',
        'sport',
        'tarif_horaire',
        'actif',
    ];

    protected $casts = [
        'tarif_horaire' => 'float',
        'actif' => 'boolean',
    ];

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}