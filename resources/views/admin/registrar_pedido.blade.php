<!DOCTYPE html>
<html>
<head>
    <title>Panel Admin - Crear Pedido</title>
</head>
<body>

<h1>Registrar pedido</h1>

<form method="POST" action="/admin/pedidos/create">

    @csrf

    <label>Cliente</label><br>
    <select name="cliente_id" required>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}">
                {{ $cliente->nombre }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label for="estado_id">Estado del pedido</label><br>
    <select name="estado_id" required>
        <option value="1">Pendiente</option>
        <option value="2">En Proceso</option>
        <option value="3">Entregado</option>
        <option value="4">Cancelado</option>
    </select>
    <br><br>

    <label>Descripción</label><br>
    <input type="text" name="descripcion" required>
    <br><br>

    <label>Dirección de Entrega</label><br>
    <input type="text" name="calle" placeholder="Calle">
    <input type="text" name="numero" placeholder="Número">
    <input type="text" name="apartamento" placeholder="Apartamento">
    <input type="text" name="barrio" placeholder="Barrio">
    <input type="text" name="ciudad" placeholder="Ciudad">
    <input type="text" name="departamento" placeholder="Departamento">
    <input type="text" name="referencia" placeholder="Referencia">
    <br><br>
    

    <label>Observaciones</label><br>
    <textarea name="observaciones"></textarea>
    <br><br>

    <label>Teléfono de contacto</label><br>
    <input type="text" name="telefono_contacto">
    <br><br>

    <label>Fecha del pedido</label><br>
    <input type="date" name="fecha_pedido" required>
    <br><br>

    <label>Fecha estimada de entrega</label><br>
    <input type="date" name="fecha_estimada_entrega" required>
    <br><br>



    <button type="submit">
        Crear Pedido
    </button>

</form>

</body>
</html>