<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $fillable=[

        'nombre',
        'bus',
        'ruta'
    ];
}
