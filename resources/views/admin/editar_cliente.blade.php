<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>

<h1>Editar Cliente</h1>

<form method="POST" action="/admin/clientes/{{ $cliente->id }}">

    @csrf
    @method('PUT')

   
    <label>Nombre</label><br>
    <input type="text" name="nombre" value="{{ $cliente->nombre }}" required>  
    <br><br>
    <label>Email</label><br>
    <input type="email" name="email" value="{{ $cliente->email }}" required>
    <br><br>
    <label>Telefono</label><br>
    <input type="text" name="telefono" value="{{ $cliente->telefono }}">
    <br><br>
    <label>Activo</label>
    <input type="checkbox" name="activo" value="1"
        {{ $cliente->activo ? 'checked' : '' }}>
    <br><br>
    <button type="submit">
        Actualizar Cliente
    </button>

</form>

</body>
</html>