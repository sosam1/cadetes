<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoPedido extends Model {
    
    protected $table = 'estados_pedido';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'color'
    ];

}
