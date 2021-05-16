<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body class="subpixel-antialiased">
    <div class="min-h-screen">
        @livewire('navbar')

        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            @yield('content')
        </main>

    </div>
    <x-footer/>
</body>
</html>
