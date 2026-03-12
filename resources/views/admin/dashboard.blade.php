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
    <a href="/admin/users/{{ $usuario->id }}/edit">
        <button>Editar</button>
    </a>

    <form action="/admin/users/{{ $usuario->id }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    <br>
@endforeach

<br>

<a href="/admin/users/create">
    <button>Registrar Usuario</button>
</a>


<h2>Lista de clientes</h2>

@foreach($clientes as $cliente)
    <p>{{ $cliente->nombre }} - {{ $cliente->email }}</p>
    <a href="/admin/clientes/{{ $cliente->id }}/edit">
        <button>Editar</button>
    </a>

    <form action="/admin/clientes/{{ $cliente->id }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    <br>
@endforeach

<br>

<a href="/admin/clientes/create">
    <button>Registrar Cliente</button>
</a>



</body>
</html>