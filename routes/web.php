<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

use App\Models\Role;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\EstadoPedido;



/*
|--------------------------------------------------------------------------
| AUTENTICACIÓN
|--------------------------------------------------------------------------
| Rutas relacionadas al login del sistema
|--------------------------------------------------------------------------
*/

// Vista de login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Procesar login
Route::post('/login', [AuthController::class,'login']);

/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
| Página principal del panel administrativo
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', function(){
    $usuarios = User::all();
    $clientes = Cliente::all();
    $pedidos = Pedido::with('cliente', 'estado')->get();
    return view('admin.dashboard', compact('usuarios', 'clientes', 'pedidos'));
});

/*
|--------------------------------------------------------------------------
| USUARIOS
|--------------------------------------------------------------------------
| Gestión completa de usuarios del sistema
|--------------------------------------------------------------------------
*/

// Listar usuarios
Route::get('/admin/usuarios', function(){
    $usuarios = User::all();
    $roles = Role::all();
    return view('admin.usuarios', compact('usuarios', 'roles'));
})->name('admin.usuarios');

// Vista crear usuario
Route::get('/admin/users/create', function () {
    $roles = Role::all();
    return view('admin.registrar_usuario', compact('roles'));

});

// Vista editar usuario
Route::get('/admin/users/{id}/edit', function($id){
    $user = User::findOrFail($id);
    return view('admin.editar_usuario', compact('user'));

});

// Crear usuario
Route::post('/admin/users/create', [UsuarioController::class, 'create']);

// Actualizar usuario
Route::put('/admin/users/{id}', [UsuarioController::class, 'update']);

// Obtener todos los usuarios
Route::get('/admin/users', [UsuarioController::class, 'getAllUsers']);

// Eliminar usuario
Route::delete('/admin/users/{id}', [UsuarioController::class, 'delete']);



/*
|--------------------------------------------------------------------------
| CLIENTES
|--------------------------------------------------------------------------
| CRUD completo para gestión de clientes
|--------------------------------------------------------------------------
*/

// Vista crear cliente
Route::get('/admin/clientes/create', function () {
    $clientes = Cliente::all();
    return view('admin.registrar_cliente', compact('clientes'));

});

// Vista editar cliente
Route::get('/admin/clientes/{id}/edit', function($id){
    $cliente = Cliente::findOrFail($id);
    return view('admin.editar_cliente', compact('cliente'));

});

// Crear cliente
Route::post('/admin/clientes/create', [ClienteController::class, 'create']);

// Listar clientes
Route::get('/admin/clientes', [ClienteController::class, 'getAllClientes']);

// Actualizar cliente
Route::put('/admin/clientes/{id}', [ClienteController::class, 'update']);

// Eliminar cliente
Route::delete('/admin/clientes/{id}', [ClienteController::class, 'delete']);



/*
|--------------------------------------------------------------------------
| PEDIDOS
|--------------------------------------------------------------------------
| CRUD para gestión de pedidos
|--------------------------------------------------------------------------
*/

// Vista crear pedido
Route::get('/admin/pedidos/create', function () {
    $clientes = Cliente::all();
    return view('admin.registrar_pedido', compact('clientes'));

});

// Vista editar pedido
Route::get('/admin/pedidos/{id}/edit', function($id){
    $pedido = Pedido::findOrFail($id);
    $clientes = Cliente::all();
    $estados = EstadoPedido::all();
    $direcciones = $pedido->cliente->direcciones;
    return view('admin.editar_pedido', compact('pedido', 'clientes', 'estados', 'direcciones'));
});

// Crear pedido
Route::post('/admin/pedidos/create', [PedidoController::class, 'create']);

// Actualizar pedido
Route::put('/admin/pedidos/{id}', [PedidoController::class, 'update']);

// Eliminar pedido
Route::delete('/admin/pedidos/{id}', [PedidoController::class, 'delete']);