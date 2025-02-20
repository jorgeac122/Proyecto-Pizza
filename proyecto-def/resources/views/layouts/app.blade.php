<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Supervición de socios')</title>
    
    <!-- Cargar Bootstrap (opcional) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #2A3132;
        }

        .container {
            background-color: #90AFC5;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#">Supervisión</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Socios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vehiculos">Vehiculos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/infracciones/select">Infracciones</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Aquí se renderiza el contenido de cada vista -->
        @yield('content')
    </div>

    <!-- Scripts (opcional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
