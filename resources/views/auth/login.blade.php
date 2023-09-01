<x-guest-layout title="Login">
    <x-slot:header>
        <div class="mt-10">
            <x-application-logo class="w-auto h-7 sm:h-8 text-black dark:text-white" />
        </div>
    </x-slot:header>
    <div
        class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950  shadow-md overflow-hidden sm:rounded-lg border border-gray-200 dark:border-gray-700">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-green-600 shadow-sm focus:ring-green-500 dark:focus:ring-green-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
                <label for="show" class="inline-flex items-center">
                    <span class="mr-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Show password') }}</span>
                    <input id="show" type="checkbox"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-green-600 shadow-sm focus:ring-green-500 dark:focus:ring-green-600 dark:focus:ring-offset-gray-800">
                </label>
            </div>
            <div class="flex items-center justify-between mt-4">
                <a class="hover:underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('home') }}">
                    {{ __('Back') }}
                </a>
                <div class="mt-1">
                    <a class="hover:underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('register') }}">
                        {{ __('Register?') }}
                    </a>
                    <x-primary-button class="ml-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </div>
            {{-- <div class="border border-gray-200 w-full mt-4"></div>
            <div class="block mt-4">
                <x-primary-button class="w-full flex justify-center gap-1 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4" fill="none">
                        <path
                            d="M24 12.276c0-.816-.067-1.636-.211-2.438H12.242v4.62h6.612a5.549 5.549 0 0 1-2.447 3.647v2.998h3.945C22.669 19.013 24 15.927 24 12.276Z"
                            fill="#4285F4" />
                        <path
                            d="M12.241 24c3.302 0 6.086-1.063 8.115-2.897l-3.945-2.998c-1.097.732-2.514 1.146-4.165 1.146-3.194 0-5.902-2.112-6.873-4.951H1.302v3.09C3.38 21.444 7.612 24 12.242 24Z"
                            fill="#34A853" />
                        <path
                            d="M5.369 14.3a7.053 7.053 0 0 1 0-4.595v-3.09H1.302a11.798 11.798 0 0 0 0 10.776L5.369 14.3Z"
                            fill="#FBBC04" />
                        <path
                            d="M12.241 4.75a6.727 6.727 0 0 1 4.696 1.798l3.495-3.425A11.898 11.898 0 0 0 12.243 0C7.611 0 3.38 2.558 1.301 6.615l4.067 3.09C6.336 6.862 9.048 4.75 12.24 4.75Z"
                            fill="#EA4335" />
                    </svg>
                    {{ __('Login') }}
                </x-primary-button>
            </div> --}}
    </div>
    </form>
    </div>
    <script>
        const password = document.getElementById("password");
        const show = document.getElementById("show");

        show.onchange = function(e) {
            password.type = show.checked ? "text" : "password";
        }
    </script>
</x-guest-layout>
