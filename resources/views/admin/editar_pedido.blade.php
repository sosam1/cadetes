<!DOCTYPE html>
<html>
<head>
    <title>Editar Pedido</title>
</head>
<body>

<h1>Editar Pedido</h1>

<form method="POST" action="/admin/pedidos/{{ $pedido->id }}">

    @csrf
    @method('PUT')

    <label for="cliente_id">Cliente:</label>
    <select id="cliente_id" name="cliente_id" required>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}" {{ $pedido->cliente_id == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
        @endforeach
    </select><br><br>

    <label for="direccion">Dirección de Entrega:</label>
    <input type="text" id="direccion" name="direccion" value="{{ $pedido->direccion }}" required><br><br>


    <label for="estado_id">Estado:</label>
    <select id="estado_id" name="estado_id" required>
        @foreach($estados as $estado)
            <option value="{{ $estado->id }}" {{ $pedido->estado_id == $estado->id ? 'selected' : '' }}>{{ $estado->nombre }}</option>
        @endforeach
    </select><br><br>


    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required>{{ $pedido->descripcion }}</textarea><br><br>

    <label for="observaciones">Observaciones:</label>
    <textarea id="observaciones" name="observaciones">{{ $pedido->observaciones }}</textarea><br><br>

    <label for="telefono_contacto">Teléfono de Contacto:</label>
    <input type="text" id="telefono_contacto" name="telefono_contacto" value="{{ $pedido->telefono_contacto }}" required><br><br>

    <label for="fecha_estimada_entrega">Fecha Estimada de Entrega:</label>
    <input type="datetime-local" id="fecha_estimada_entrega" name="fecha_estimada_entrega" value="{{ $pedido->fecha_estimada_entrega ? $pedido->fecha_estimada_entrega->format('Y-m-d\TH:i') : '' }}" required><br><br>

    <label for="fecha_entrega_real">Fecha de Entrega Real:</label>
    <input type="datetime-local" id="fecha_entrega_real" name="fecha_entrega_real" value="{{ $pedido->fecha_entrega_real ? $pedido->fecha_entrega_real->format('Y-m-d\TH:i') : '' }}"><br><br>

    <button type="submit">Actualizar Pedido</button>
    
</form>

</body>
</html>