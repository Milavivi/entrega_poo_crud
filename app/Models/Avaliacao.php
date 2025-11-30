<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
     protected $fillable = [
        'usuario',
        'nota',
        'comentario'
    ];

     protected $table = 'avaliacoes';
}
