<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h3 class="text-xl font-bold mb-4">
                    Bienvenido, {{ Auth::user()->name }}
                </h3>

                <p class="text-gray-600 mb-4">
                    Has iniciado sesión correctamente.
                </p>

                <ul class="list-disc list-inside text-gray-700">
                    <li>Autenticación con usuario y contraseña</li>
                    <li>Inicio de sesión con Google (OAuth)</li>
                    <li>Dashboard protegido por middleware</li>
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>
