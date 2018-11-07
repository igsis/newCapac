<?php

namespace capac\Models;

use Illuminate\Database\Eloquent\Model;

class AtracaoEvento extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'atracao_id', 'evento_id'
    ];
}
