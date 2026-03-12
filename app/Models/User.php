<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'usuarios';
    public $timestamps = false;
    
    protected $fillable = [
        'rol_id',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'password_hash',
        'activo'
    ];

    protected $hidden = [
        'password_hash',
    ];

    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    public function rol()
    {
        return $this->belongsTo(Role::class, 'rol_id');
    }

    
}