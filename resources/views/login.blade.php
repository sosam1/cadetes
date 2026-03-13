<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cadetes</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container min-vh-100 d-flex justify-content-center align-items-center py-4">
        <div class="login-container w-100">

            <div class="img-container mx-auto">
                <img class="box-img" src="{{ asset('img/box-seam.svg') }}" alt="Logo">
            </div>

            <div class="titulo">
                <h2>Cadetes UY</h2>
                <p>Ingrese sus credenciales para acceder al sistema</p>
            </div>

            <form class="form" method="POST" action="/login">
                @csrf

                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="tu@email.com" required>

                <label for="password">Contraseña</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Contraseña" required>

                <button type="submit" class="btn-login">Iniciar Sesión</button>
            </form>

        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>

</body>

</html>