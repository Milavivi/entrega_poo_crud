<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
     protected $fillable = [
        'titulo',
        'descricao',
        'modo_preparo',
        'tempo_preparo',
        'categoria_id'
    ];


    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
