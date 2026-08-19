<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo El Salvador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('lugares.index') }}">🇸🇻 Turismo El Salvador</a>
        </div>
    </nav>

    <div class="container mb-5">
        @yield('content')
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p class="m-0">&copy; {{ date('Y') }} Turismo El Salvador - Proyecto Evaluado MVC</p>
    </footer>
</body>
</html>
