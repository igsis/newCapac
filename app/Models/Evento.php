<?php

namespace capac\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'tipo_evento_id', 'nome_evento','sinopse', 'contratacao', 'users_id', 'publicado'
    ];

}
