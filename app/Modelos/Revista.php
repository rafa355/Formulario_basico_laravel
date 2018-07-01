<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
    protected $table = 'revista';

    protected $fillable = [
        'nombre','contenido','comprador'
    ];
}
