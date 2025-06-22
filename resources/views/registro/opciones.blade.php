<x-app-layout>
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 text-white flex flex-col px-4 py-6 space-y-4">
            <h2 class="text-lg font-bold mb-4">Opciones de Registro</h2>
            <button onclick="mostrarFormulario('usuario')" class="text-left px-4 py-2 hover:bg-blue-700 rounded">
                Registrar Usuario
            </button>
            <button onclick="mostrarFormulario('servicio')" class="text-left px-4 py-2 hover:bg-blue-700 rounded">
                Registrar Servicio
            </button>
        </div>

        <!-- Panel de contenido -->
        <div class="flex-1 p-8 bg-white">
            <div id="form-usuario" class="{{ session('success') || $errors->any() ? '' : 'hidden' }}">

                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Registrar Usuario</h2>

                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form action="{{ route('usuarios.store') }}" method="POST"
                    class="bg-white p-6 rounded-lg shadow-md space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="dni" class="block text-sm font-medium text-gray-700 mb-1">DNI</label>
                            <input type="text" name="dni" id="dni" maxlength="8" required
                                class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200">
                        </div>

                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                            <input type="text" name="nombre" id="nombre" required
                                class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200">
                        </div>

                        <div>
                            <label for="apellidos"
                                class="block text-sm font-medium text-gray-700 mb-1">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" required
                                class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200">
                        </div>

                        <div>
                            <label for="dec_jurada" class="block text-sm font-medium text-gray-700 mb-1">Declaración
                                Jurada</label>
                            <select name="dec_jurada" id="dec_jurada" required
                                class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200">
                                <option value="">Seleccione</option>
                                <option value="S">S</option>
                                <option value="N">N</option>
                            </select>
                        </div>

                        <div>
                            <label for="correo" class="block text-sm font-medium text-gray-700 mb-1">Correo
                                electrónico</label>
                            <input type="email" name="correo" id="correo" required
                                class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200">
                        </div>

                        <div>
                            <label for="celular" class="block text-sm font-medium text-gray-700 mb-1">Celular</label>
                            <input type="text" name="celular" id="celular" required
                                class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200">
                        </div>

                        <div>
                            <label for="tipo" class="block text-sm font-medium text-gray-700 mb-1">Tipo de
                                Usuario</label>
                            <select name="tipo" id="tipo" required
                                class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200">
                                <option value="">Seleccione</option>
                                <option value="Estudiante">Estudiante</option>
                                <option value="Docente">Docente</option>
                                <option value="Administrativo">Administrativo</option>
                                <option value="Externo">Externo</option>
                            </select>
                        </div>

                        <div>
                            <label for="fecha_registro" class="block text-sm font-medium text-gray-700 mb-1">Fecha de
                                Registro</label>
                            <input type="date" name="fecha_registro" id="fecha_registro" required
                                class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200">
                        </div>

                        <div class="md:col-span-2">
                            <label for="url_dec_jurada" class="block text-sm font-medium text-gray-700 mb-1">URL
                                Declaración Jurada</label>
                            <input type="url" name="url_dec_jurada" id="url_dec_jurada" required
                                class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200">
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit"
                            class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-2 rounded inline-flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Registrar Usuario
                        </button>

                        <div class="text-right mt-4">
                            <button type="button"
                                onclick="document.getElementById('modal-clientes').classList.remove('hidden')"
                                class="bg-gray-700 hover:bg-gray-800 text-white px-6 py-2 rounded">
                                Ver usuarios registrados
                            </button>
                        </div>

                    </div>
                </form>


                <!-- Modal flotante -->
                <div id="modal-clientes"
                    class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 {{ session('abrir_modal') ? '' : 'hidden' }}">
                    <div class="bg-white rounded-lg shadow-lg w-11/12 max-w-4xl p-6 overflow-auto max-h-[90vh]">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-bold">Usuarios Registrados</h3>
                            <button onclick="document.getElementById('modal-clientes').classList.add('hidden')"
                                class="text-red-600 hover:text-red-800 font-bold text-lg">&times;</button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border-collapse border border-gray-300 text-sm">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="border px-4 py-2">DNI</th>
                                        <th class="border px-4 py-2">Nombre</th>
                                        <th class="border px-4 py-2">Apellidos</th>
                                        <th class="border px-4 py-2">Correo</th>
                                        <th class="border px-4 py-2">Celular</th>
                                        <th class="border px-4 py-2">Tipo</th>
                                        <th class="border px-4 py-2">url_dec_jurada</th>
                                        <th class="border px-4 py-2">Fecha</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td class="border px-4 py-1">{{ $cliente->dni }}</td>
                                            <td class="border px-4 py-1">{{ $cliente->nombre }}</td>
                                            <td class="border px-4 py-1">{{ $cliente->apellidos }}</td>
                                            <td class="border px-4 py-1">{{ $cliente->correo }}</td>
                                            <td class="border px-4 py-1">{{ $cliente->celular }}</td>
                                            <td class="border px-4 py-1">{{ $cliente->tipo }}</td>
                                            <td class="border px-4 py-1">
                                                <a href="{{ $cliente->url_dec_jurada }}" class="text-blue-600 underline hover:text-blue-800" target="_blank">
                                                    Ver declaración
                                                </a>
                                            </td>
                                            <td class="border px-4 py-1">{{ $cliente->fecha_registro }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>





            </div>

            <div id="form-servicio" class="hidden">
                <h2 class="text-2xl font-semibold mb-4">Formulario - Registrar Servicio</h2>
                <p class="text-gray-600">Aquí irá el formulario para registrar un nuevo servicio.</p>
            </div>
        </div>
    </div>

    <script>
        function mostrarFormulario(tipo) {
            document.getElementById('form-usuario').style.display = 'none';
            document.getElementById('form-servicio').style.display = 'none';

            if (tipo === 'usuario') {
                document.getElementById('form-usuario').style.display = 'block';
            } else if (tipo === 'servicio') {
                document.getElementById('form-servicio').style.display = 'block';
            }
        }
    </script>
</x-app-layout>
