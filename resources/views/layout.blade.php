<!DOCTYPE html>
<html>

<head>
    <title>Reservas de Laboratorios</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilo personalizado para el navbar */
        .navbar-custom {

            /* Fondo blanco */
            color: #343a40;
            /* Texto color gris oscuro */
        }

        .navbar-custom .navbar-brand {
            color: #343a40;
            /* Color de texto para el nombre de la marca */
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #343a40;
            /* Color de texto para los enlaces del navbar */
        }

        /* Estilo personalizado para el footer */
        .footer-custom {
            background-color: #343a40 !important;
            /* Fondo oscuro con !important para priorizar */
            padding: 10px 0;
            /* Espaciado interno */
        }

        .footer-custom p {
            margin-bottom: 0;
            /* Eliminar margen inferior de los párrafos dentro del footer */

            /* Texto color blanco */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">Sistema de Reservas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('reservas*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('reservas.index') }}">Reservas</a>
                    </li>
                    <li class="nav-item {{ request()->is('laboratorios*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('laboratorios.index') }}">Laboratorios</a>
                    </li>
                    <li class="nav-item {{ request()->is('usuarios*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="footer mt-auto py-3 footer-custom">
        <div class="container text-center">
            <p>Realizado por Diego Enriquez 3/Julio/2024</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
