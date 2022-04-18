<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadisticaRl extends Model
{
    use HasFactory;

    protected $table = 'cat_estadisticas_rl';

    protected $fillable = [
        'nHoras',
        'mmr',
        'nGoles',
        'nSaves',
        'idCategoria',
        'idUsuario',
    ];
}
