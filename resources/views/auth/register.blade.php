<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-100 p-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Header con imagen de fondo -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 p-6 text-center">
                <img src="https://www.fablabs.io/media/W1siZiIsIjIwMTcvMDEvMjgvMTEvMTEvMDEvNmU2NmRiYWItYWQxYi00MTFkLTkxN2QtMjE1NTdhNjdlMzBhL0ZhYiBMYWIgTGltYS5qcGciXSxbInAiLCJ0aHVtYiIsIjMwMHgzMDAiXV0/Fab%20Lab%20Lima.jpg?sha=a4cdf67a5a498adb" 
                     alt="Logo FabLab UNCP" 
                     class="w-24 h-24 mx-auto rounded-full border-4 border-white shadow-md">
                <h1 class="mt-4 text-2xl font-bold text-white">Crear Cuenta</h1>
                <p class="text-blue-100 mt-1">Únete a nuestra comunidad de innovación</p>
            </div>

            <!-- Contenido del formulario -->
            <div class="p-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Nombre -->
                    <div class="mb-6">
                        <x-input-label for="name" :value="__('Nombre Completo')" class="block text-sm font-medium text-gray-700 mb-1" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <x-text-input 
                                id="name" 
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" 
                                type="text" 
                                name="name" 
                                :value="old('name')" 
                                required 
                                autofocus 
                                placeholder="Juan Pérez"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-1 text-sm text-red-600" />
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <x-input-label for="email" :value="__('Correo Institucional')" class="block text-sm font-medium text-gray-700 mb-1" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <x-text-input 
                                id="email" 
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" 
                                type="email" 
                                name="email"
                                :value="old('email')" 
                                required 
                                placeholder="usuario@uncp.edu.pe"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-600" />
                    </div>

                    <!-- Contraseña -->
                    <div class="mb-6">
                        <x-input-label for="password" :value="__('Contraseña')" class="block text-sm font-medium text-gray-700 mb-1" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <x-text-input 
                                id="password" 
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                                type="password"
                                name="password"
                                required 
                                placeholder="••••••••"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-600" />
                        <p class="mt-1 text-xs text-gray-500">Mínimo 8 caracteres, incluyendo mayúsculas y números</p>
                    </div>

                    <!-- Confirmar Contraseña -->
                    <div class="mb-6">
                        <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" class="block text-sm font-medium text-gray-700 mb-1" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <x-text-input 
                                id="password_confirmation" 
                                class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                                type="password"
                                name="password_confirmation"
                                required 
                                placeholder="••••••••"
                            />
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-sm text-red-600" />
                    </div>

                    <!-- Botón de Registro -->
                    <div>
                        <button type="submit" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200">
                            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            {{ __('Registrarse') }}
                        </button>
                    </div>
                </form>

                <!-- Divider -->
                <div class="mt-6 relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">
                            ¿Ya tienes una cuenta?
                        </span>
                    </div>
                </div>

                <!-- Enlace a Login -->
                <div class="mt-6 text-center">
                    <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline transition duration-200">
                        Inicia sesión aquí
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>