<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Final PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

    <div class="container-fluid min-vh-100 d-flex align-items-center">
        <div class="row w-100">

            <!-- LADO IZQUIERDO -->
            <div class="col-md-6 d-flex flex-column justify-content-center px-5">
                <h1 class="display-5 fw-bold mb-3">
                    Proyecto Final PHP
                </h1>

                <p class="text-muted mb-4">
                    Aplicación web desarrollada con Laravel que implementa
                    autenticación tradicional y acceso mediante Google OAuth.
                </p>

                <div class="d-flex gap-3">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                        Iniciar sesión
                    </a>

                    <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg">
                        Registrarse
                    </a>
                </div>
            </div>

            <!-- LADO DERECHO -->
            <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center">
                <div class="text-center">
                    <img src="https://tailkits.com/_ipx/_/laravel-vs-php.png"
                         alt="Laravel Logo"
                         width="180"
                         class="mb-3">

                    <p class="text-secondary">
                        Laravel · MySQL · Bootstrap · OAuth
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
