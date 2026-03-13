<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {

    protected $table = 'pedidos';
    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'cliente_id',
        'creado_por_usuario_id',
        'estado_id',
        'descripcion',
        'observaciones',
        'telefono_contacto',
        'fecha_pedido',
        'fecha_estimada_entrega',
        'fecha_entrega_real',
        'activo',
        'calle',
        'numero',
        'apartamento',
        'barrio',
        'ciudad',
        'departamento',
        'referencia',
        'latitud',
        'longitud'
    ];
    
    protected $casts = [
        'fecha_pedido' => 'datetime',
        'fecha_estimada_entrega' => 'datetime',
        'fecha_entrega_real' => 'datetime',
        'activo' => 'boolean',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function estado(){
        return $this->belongsTo(EstadoPedido::class, 'estado_id');
    }
    
    public function creador(){
        return $this->belongsTo(User::class, 'creado_por_usuario_id');
    }

}
