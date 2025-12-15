<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container py-5">

        <!-- BIENVENIDA -->
        <div class="row mb-4">
            <div class="col">
                <div class="alert alert-primary shadow-sm">
                    <h4 class="alert-heading mb-1">
                        Bienvenido, {{ Auth::user()->name }}
                    </h4>
                    <p class="mb-0">
                        Has iniciado sesión correctamente en el sistema.
                    </p>
                </div>
            </div>
        </div>

        <!-- TARJETAS -->
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Autenticación</h5>
                        <p class="card-text text-muted">
                            El sistema permite el inicio de sesión mediante
                            correo electrónico y contraseña.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Google OAuth</h5>
                        <p class="card-text text-muted">
                            Se integró el acceso mediante Google utilizando
                            OAuth 2.0 y Laravel Socialite.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Seguridad</h5>
                        <p class="card-text text-muted">
                            El dashboard está protegido por middleware,
                            permitiendo acceso solo a usuarios autenticados.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
