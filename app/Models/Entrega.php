<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model {
    
    protected $table = 'entregas';
    public $timestamps = false;

    protected $fillable = [
        'pedido_id',
        'cadete_id',
        'resultado',
        'recibido_por',
        'observacion',
        'firma_url',
        'foto_url',
        'fecha_entrega',
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function cadete()
    {
        return $this->belongsTo(User::class, 'cadete_id');
    }

}
