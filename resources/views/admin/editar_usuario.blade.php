<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>

<h1>Editar Usuario</h1>

<form method="POST" action="/admin/users/{{ $user->id }}">

    @csrf
    @method('PUT')

    <label>Nombre</label><br>
    <input type="text" name="nombre" value="{{ $user->nombre }}" required>
    <br><br>

    <label>Apellido</label><br>
    <input type="text" name="apellido" value="{{ $user->apellido }}" required>
    <br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <br><br>

    <label>Telefono</label><br>
    <input type="text" name="telefono" value="{{ $user->telefono }}">
    <br><br>

    <label>Nueva contraseña</label><br>
    <input type="password" name="password">
    <br>
    <small>Dejar vacío si no querés cambiarla</small>
    <br><br>

    <label>Activo</label>
    <input type="checkbox" name="activo" value="1"
        {{ $user->activo ? 'checked' : '' }}>
    <br><br>

    <button type="submit">
        Actualizar Usuario
    </button>

</form>

</body>
</html>