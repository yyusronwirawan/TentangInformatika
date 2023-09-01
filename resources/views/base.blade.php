<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ? 'SCI | ' . $title : config('app.name') }}</title>
    <link rel="icon" href="{{ asset('../storage/image/default/Sci-Logo.png') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    {{ $slot }}

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
