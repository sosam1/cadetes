<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historial_estados_pedido extends Model {
    
    protected $table = 'historial_estados_pedido';
    protected $fillable = [    
        'pedido_id',
        'estado_id',
        'usuario_id',
        'comentario',
        'fecha_cambio'
    ];
    
}
