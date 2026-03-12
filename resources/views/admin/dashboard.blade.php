<!DOCTYPE html>
<html>
<head>
    <title>Panel Admin</title>
</head>
<body>

<h1>Panel {{ Auth::user()->rol->nombre }}</h1>

<h2>Hola {{ Auth::user()->nombre }}</h2>

<br>

<h2>Lista de usuarios</h2>

@foreach($usuarios as $usuario)
    <p>{{ $usuario->nombre }} {{ $usuario->apellido }} - {{ $usuario->email }}</p>
    <br>
@endforeach


<a href="/admin/users/create">
    <button>Registrar Usuario</button>
</a>

</body>
</html>