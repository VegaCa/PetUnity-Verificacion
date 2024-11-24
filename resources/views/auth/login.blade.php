<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <div class="text-center">
                <img style="width: 200px;" src="{{ asset('img/logo.png') }}" class="img-fluid">
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __(app()->getLocale() == 'es' ? 'Correo electrónico' : 'Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __(app()->getLocale() == 'es' ? 'Contraseña' : 'Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __(app()->getLocale() == 'es' ? 'Recordarme' : 'Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __(app()->getLocale() == 'es' ? '¿Olvidaste tu contraseña?' : 'Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __(app()->getLocale() == 'es' ? 'Iniciar sesión' : 'Log in') }}
                </x-button>

                <a class="ml-4 " style="display: inline-block;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    background-color: #6c757d;
    color: #fff;
    border: 1px solid #6c757d;
    border-radius: 0.25rem;" href="{{ url('/') }}">
                    {{ __(app()->getLocale() == 'es' ? 'Cancelar' : 'Cancel') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

