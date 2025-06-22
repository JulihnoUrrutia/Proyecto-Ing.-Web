<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PRUS - FabLab UNCP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <header class="bg-blue-800 text-white p-6">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold">PRUS - FabLab UNCP</h1>
                <p class="text-sm">Programa de Registro de Usuarios y Servicios (PRUS)</p>
            </div>

            {{-- Menú de navegación con opciones --}}
            <div class="space-x-4 flex items-center">
                {{-- Solo mostrar si el usuario está autenticado --}}
                @auth
                    {{-- Enlace a la interfaz de opciones de registro --}}
                    <a href="{{ route('registro.opciones') }}" class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded text-white">
                        Registrar
                    </a>

                    {{-- Botón de cerrar sesión --}}
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded text-white">
                            Cerrar sesión
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </header>

    <main class="container mx-auto my-8">
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">¿Qué es el FabLab?</h2>
            <p>
                El FabLab UNCP es un laboratorio de fabricación digital que ofrece acceso a herramientas tecnológicas como impresoras 3D, cortadoras láser y más, permitiendo a los estudiantes y profesionales materializar sus ideas.
            </p>
        </section>

        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">¿Qué es PRUS?</h2>
            <p>
                PRUS (Programa de Registro de Usuarios y Servicios) es un sistema de gestión utilizado por el FabLab para registrar a sus usuarios y los servicios que estos solicitan. Solo el personal autorizado tiene acceso al sistema de gestión.
            </p>
        </section>

        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">Servicios ofrecidos</h2>
            <ul class="list-disc list-inside">
                <li>Impresión 3D</li>
                <li>Corte y grabado láser</li>
                <li>Asesoramiento en diseño digital</li>
                <li>Prototipado rápido</li>
            </ul>
        </section>

        <div class="mt-10">
            
        </div>
    </main>

    <footer class="bg-blue-800 text-white p-4 text-center mt-12">
        &copy; {{ date('Y') }} FabLab UNCP. Todos los derechos reservados.
    </footer>
</body>
</html>
