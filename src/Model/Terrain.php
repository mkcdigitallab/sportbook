<?php
declare(strict_types=1);

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Terrain extends Model
{
    protected $table = 'terrains';
    protected $fillable = ['nom', 'description', 'tarif_horaire', 'actif'];

}