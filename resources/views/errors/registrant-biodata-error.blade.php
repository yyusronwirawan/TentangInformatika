<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased h-full">
    <main
        class="grid min-h-full place-items-center bg-gradient-to-bl from-teal-100 via-white to-teal-100 dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950 px-6 py-24 sm:py-32 lg:px-8 font-inter">
        <div class="text-center">
            <p class="text-base font-semibold text-emerald-600 dark:text-emerald-400">@yield('code')</p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-5xl">
                @yield('message')
            </h1>
            <p class="mt-6 text-base leading-7 text-gray-600 dark:text-gray-400">Go back and fill the rest of field.</p>
            <div class="mt-10 flex items-center justify-center gap-x-3">
                <a href="{{ url()->previous() }}"
                    class="rounded-md bg-emerald-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">
                    Back
                </a>
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="rounded-md bg-emerald-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('home') }}"
                        class="rounded-md bg-emerald-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">
                        Home
                    </a>
                @endauth
            </div>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
