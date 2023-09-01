<x-guest-layout title="Register">
    <x-slot:header>
        <div class="mt-10">
            <x-application-logo class="w-auto h-7 sm:h-8 text-black dark:text-white" />
        </div>
    </x-slot:header>
    <div
        class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950
        dark:border-gray-700 shadow-lg overflow-hidden sm:rounded-lg border border-gray-200">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Show Password -->
            <div class="block mt-4">
                <label for="show" class="inline-flex items-center mt-1">
                    <input id="show" type="checkbox"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-green-600 shadow-sm focus:ring-green-500 dark:focus:ring-green-600 dark:focus:ring-offset-gray-800">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Show password') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="hover:underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <script>
        const password = document.getElementById("password");
        const password_confirmation = document.getElementById("password_confirmation");
        const show = document.getElementById("show");

        show.onchange = function(e) {
            password.type = show.checked ? "text" : "password";
            password_confirmation.type = show.checked ? "text" : "password";
        }
    </script>
</x-guest-layout>
