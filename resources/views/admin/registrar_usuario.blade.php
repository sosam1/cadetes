<!DOCTYPE html>
<html>
<head>
    <title>Panel Admin - Crear Usuario</title>
</head>
<body>

<h1>Registrar usuario</h1>

<form method="POST" action="/admin/users/create">

    @csrf

    <label>Nombre</label><br>
    <input type="text" name="nombre" required>
    <br><br>

    <label>Apellido</label><br>
    <input type="text" name="apellido" required>
    <br><br>

    <label>Email</label><br>
    <input type="email" name="email" required>
    <br><br>

    <label>Telefono</label><br>
    <input type="text" name="telefono">
    <br><br>

    <label>Password</label><br>
    <input type="password" name="password" required>
    <br><br>

    <label>Rol</label><br>
    <select name="rol_id">

        @foreach($roles as $rol)
            <option value="{{ $rol->id }}">
                {{ $rol->nombre }}
            </option>
        @endforeach

    </select>

    <br><br>

    <button type="submit">
        Crear Usuario
    </button>

</form>

</body>
</html>