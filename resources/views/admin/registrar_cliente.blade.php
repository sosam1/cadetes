<!DOCTYPE html>
<html>
<head>
    <title>Panel Admin - Crear Usuario</title>
</head>
<body>

<h1>Registrar cliente</h1>

<form method="POST" action="/admin/clientes/create">

    @csrf

    <label>Nombre</label><br>
    <input type="text" name="nombre" required>
    <br><br>
    <label>Telefono</label><br>
    <input type="text" name="telefono">
    <br><br>
    <label>Email</label><br>
    <input type="email" name="email" required>
    <br><br>
    <button type="submit">
        Crear Cliente
    </button>

</form>

</body>
</html>