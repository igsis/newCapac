<?php

namespace capac\Models;

use Illuminate\Database\Eloquent\Model;

class EventosRelacionado extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'evento_id', 'evento_relacionado_id',
    ];
}
