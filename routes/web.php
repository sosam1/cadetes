<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Models\Role;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login',[AuthController::class,'login']);

Route::get('/admin/dashboard', function(){
    return view('admin.dashboard');
});

Route::get('/admin/pedidos', function(){
    return view('admin.pedidos');
});

Route::get('/cadete/ruta', function(){
    return view('cadete.ruta');
});


// Rutas para la gestión de usuarios

//llamo vista para crear usuario
Route::get('/admin/users/create', function () {
    $roles = Role::all();
    return view('admin.registrar_usuario', compact('roles'));
});

Route::post('/admin/users/create', [UsuarioController::class, 'create']);
Route::get('/admin/users', [UsuarioController::class, 'getAllUsers']);
Route::delete('/admin/users/{id}', [UsuarioController::class, 'delete']);
Route::put('/admin/users/{id}', [UsuarioController::class, 'update']);