<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Models\Role;
use App\Models\User;
use App\Models\Cliente;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login',[AuthController::class,'login']);

Route::get('/admin/dashboard', function(){
    $usuarios = User::all();
    $clientes = Cliente::all();
    return view('admin.dashboard', compact('usuarios', 'clientes'));
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

//llamo vista para editar usuario
Route::get('/admin/users/{id}/edit', function($id){
    $user = User::findOrFail($id);
    return view('admin.editar_usuario', compact('user'));
});

Route::post('/admin/users/create', [UsuarioController::class, 'create']);
Route::put('/admin/users/{id}', [UsuarioController::class, 'update']);
Route::get('/admin/users', [UsuarioController::class, 'getAllUsers']);
Route::delete('/admin/users/{id}', [UsuarioController::class, 'delete']);


// Rutas para la gestión de clientes
//vistas para clientes

Route::get('/admin/clientes/create', function () {
    $clientes = Cliente::all();
    return view('admin.registrar_cliente', compact('clientes'));
});

Route::get('/admin/clientes/{id}/edit', function($id){
    $cliente = Cliente::findOrFail($id);
    return view('admin.editar_cliente', compact('cliente'));
});

Route::post('/admin/clientes/create', [ClienteController::class, 'create']);
Route::get('/admin/clientes', [ClienteController::class, 'getAllClientes']);
Route::put('/admin/clientes/{id}', [ClienteController::class, 'update']);
Route::delete('/admin/clientes/{id}', [ClienteController::class, 'delete']);

