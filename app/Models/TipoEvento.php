<?php

namespace capac\Models;

use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    protected $table = 'tipo_evento';

    protected $fillable = [
        'tipo_evento',
    ];

    public $timestamps = false;
}
