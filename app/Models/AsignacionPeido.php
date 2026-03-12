<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsignacionPeido extends Model {
    
    protected $table = 'asignacion_pedido';
    protected $fillable = [    
        'pedido_id',
        'cadete_id',
        'asignado_por_usuario_id',
        'fecha_asignacion',
        'ordem_ruta',
        'qr_token'
    ];

}
