<!DOCTYPE html>
<html>
<head>
    <title>Panel Admin</title>
</head>
<body>

<h1>Panel {{ Auth::user()->rol->nombre }}</h1>

<h2>Hola {{ Auth::user()->nombre }}</h2>

<br>

<a href="/admin/users/create">
    <button>Registrar Usuario</button>
</a>

</body>
</html>