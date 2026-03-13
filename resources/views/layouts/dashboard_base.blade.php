<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel Admin')</title>

    <link rel="stylesheet" href="{{ asset('css/admin_dashboard.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @stack('styles')
</head>
<body>

    <div class="admin-layout">

        <aside class="sidebar">
            <div>
                <div class="sidebar-brand">
                    <div class="brand-icon">
                        <img class="brand-logo" src="{{ asset('img/box-seam.svg') }}" alt="Logo">
                    </div>
                    <div class="brand-text">
                        <h2>Cadeterías</h2>
                        <p>Panel Admin</p>
                    </div>
                </div>

                <nav class="sidebar-nav">
                    <a href="#" class="nav-item active">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="#" class="nav-item">
                        <i class="bi bi-people"></i>
                        <span>Clientes</span>
                    </a>

                    <a href="#" class="nav-item">
                        <i class="bi bi-box-seam"></i>
                        <span>Pedidos</span>
                    </a>

                    <a href="#" class="nav-item">
                        <i class="bi bi-truck"></i>
                        <span>Asignaciones</span>
                    </a>

                    <a href="{{ route('admin.usuarios') }}" class="nav-item">
                        <i class="bi bi-person-gear"></i>
                        <span>Usuarios</span>
                    </a>
                </nav>
            </div>

            <div class="sidebar-footer">
                <div class="user-card">
                    <h4>Admin Sistema</h4>
                    <p>admin@cadeteria.com</p>
                    <span>Admin</span>
                </div>

                    
                <button class="btn-logout btn btn-danger"><img src="{{ asset('img/box-arrow-in-right.svg') }}" alt="Cerrar Sesión">Cerrar Sesión</button>
            </div>
        </aside>

        <main class="main-content">
            @yield('content')
        </main>

    </div>

</body>
</html>