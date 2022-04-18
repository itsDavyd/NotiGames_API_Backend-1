<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadisticaCsgo extends Model
{
    use HasFactory;

    protected $table = 'cat_estadisticas_csgo';

    protected $fillable = [
        'nHoras',
        'mmr',
        'nKills',
        'nMuertes',
        'idCategoria',
        'idUsuario',
    ];
}
