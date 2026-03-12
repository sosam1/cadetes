<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

    public function login(Request $request) {
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            if ($user->rol->nombre == 'admin') {
                return redirect('/admin/dashboard');
            }

            if ($user->rol->nombre == 'administrativo') {
                return redirect('/admin/pedidos');
            }

            if ($user->rol->nombre == 'cadete') {
                return redirect('/cadete/ruta');
            }

        }

        return back()->with('error','Credenciales incorrectas');
    }

}