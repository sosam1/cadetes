<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function create(Request $request)
    {
        $ultimoPedido = Pedido::orderBy('id', 'desc')->first();
        $siguienteNumero = $ultimoPedido ? $ultimoPedido->id + 1 : 1;
        $codigoGenerado = 'PED-' . str_pad($siguienteNumero, 4, '0', STR_PAD_LEFT);

        $pedido = Pedido::create([
            'codigo' => $codigoGenerado,
            'cliente_id' => $request->cliente_id,
            'creado_por_usuario_id' => Auth::id(),
            'estado_id' => $request->estado_id,
            'descripcion' => $request->descripcion,
            'observaciones' => $request->observaciones,
            'telefono_contacto' => $request->telefono_contacto,
            'fecha_pedido' => $request->fecha_pedido,
            'fecha_estimada_entrega' => $request->fecha_estimada_entrega,
            'fecha_entrega_real' => null,
            'activo' => true,

            'calle' => $request->calle,
            'numero' => $request->numero,
            'apartamento' => $request->apartamento,
            'barrio' => $request->barrio,
            'ciudad' => $request->ciudad,
            'departamento' => $request->departamento,
            'referencia' => $request->referencia,
            'latitud' => $request->latitud,
            'longitud' => $request->longitud
        ]);

        return response()->json([
            'message' => 'Pedido creado exitosamente',
            'pedido' => $pedido
        ], 201);
    }

    public function delete($id)
    {
        $pedido = Pedido::find($id);

        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        $pedido->activo = false;
        $pedido->save();

        return response()->json(['message' => 'Pedido eliminado exitosamente']);
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);

        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        $pedido->cliente_id = $request->cliente_id;
        $pedido->estado_id = $request->estado_id;
        $pedido->descripcion = $request->descripcion;
        $pedido->observaciones = $request->observaciones;
        $pedido->telefono_contacto = $request->telefono_contacto;
        $pedido->fecha_estimada_entrega = $request->fecha_estimada_entrega;
        $pedido->fecha_entrega_real = $request->fecha_entrega_real;

        $pedido->calle = $request->calle;
        $pedido->numero = $request->numero;
        $pedido->apartamento = $request->apartamento;
        $pedido->barrio = $request->barrio;
        $pedido->ciudad = $request->ciudad;
        $pedido->departamento = $request->departamento;
        $pedido->referencia = $request->referencia;
        $pedido->latitud = $request->latitud;
        $pedido->longitud = $request->longitud;

        $pedido->save();

        return response()->json([
            'message' => 'Pedido actualizado exitosamente',
            'pedido' => $pedido
        ]);
    }

    public function getAll()
    {
        $pedidos = Pedido::where('activo', true)->get();

        return response()->json($pedidos);
    }
}