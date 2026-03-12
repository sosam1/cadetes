<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {

    protected $table = 'pedidos';
    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'cliente_id',
        'direccion_entrega_id',
        'estado_id',
        'descripcion',
        'observaciones',
        'telefono_contacto',
        'fecha_pedido',
        'fecha_estimada_entrega',
        'fecha_entrega_real',
        'activo'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
    
}
