<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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