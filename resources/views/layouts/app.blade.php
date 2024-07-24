<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-50 dark:bg-gray-900"> <!-- Asegúrate de que el color del fondo coincida con el sidebar -->
            <x-sidebar />
    
            <!-- Page Content -->
            <main class="min-h-screen sm:rounded-l-3xl bg-gray-200 dark:bg-gray-900 ml-0 sm:ml-16 p-4"> <!-- Aplica bordes redondeados y ajusta el margen -->
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
