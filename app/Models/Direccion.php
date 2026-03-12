<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model {
    
    protected $table = 'direcciones';
    public $timestamps = false;

    protected $fillable = [
        'cliente_id',
        'calle',
        'numero',
        'apartamento',
        'barrio',
        'ciudad',
        'departamento',
        'referecia',
        'latitud',
        'longitud'
    ];

}
