<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

    //public $table = 'empresa';

    protected $fillable = [
    'Nombre', 'Direccion', 'NombreRepresentante', 'NIT', 'Celular',
    ];
}
