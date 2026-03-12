<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller {
    
    public function create(Request $request) {
        $cliente = Cliente::create([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'activo' => true
        ]);

        return response()->json(['message' => 'Cliente creado exitosamente', 'cliente' => $cliente], 201);
    }

    public function getAllClientes() {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    public function update(Request $request, $id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->update([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'activo' => $request->activo
        ]);

        return response()->json(['message' => 'Cliente actualizado exitosamente', 'cliente' => $cliente]);
    }

    public function delete($id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response()->json(['message' => 'Cliente eliminado exitosamente']);
    }
}
