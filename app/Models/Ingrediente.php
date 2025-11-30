<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
     protected $fillable = ['nome', 'quantidade', 'unidade', 'receita_id'];

    public function receita()
    {
        return $this->belongsTo(Receita::class);
    }
}
