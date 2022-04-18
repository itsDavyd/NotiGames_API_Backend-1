<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadisticaLol extends Model
{
    use HasFactory;
    
    protected $table = 'cat_estadisticas_lol';

    protected $fillable = [
        'nHoras',
        'mmr',
        'rol',
        'idCategoria',
        'idUsuario',
    ];
}
