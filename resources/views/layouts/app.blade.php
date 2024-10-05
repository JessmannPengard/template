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
    <x-theme.theme-setter />
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-green-800 dark:bg-zinc-950">

        <!-- Sidebar -->
        {{-- Hamburger menu --}}
        <x-sidebar.sidebar-button />
        {{-- Sidebar --}}
        <x-sidebar.sidebar>
            {{-- Header --}}
            <x-slot:header>
                <x-ui.application-logo class="h-10 px-2" />
            </x-slot:header>

            {{-- Items --}}
            <x-sidebar.sidebar-item href="/dashboard" :active="request()->is('dashboard')" icon="dashboard">
                Inicio
            </x-sidebar.sidebar-item>

            <x-sidebar.sidebar-item href="/config" :active="request()->is('config')" icon="settings">
                Configuración
            </x-sidebar.sidebar-item>

            <x-sidebar.sidebar-item href="/faq" :active="request()->is('faq')" icon="question">
                FAQ
            </x-sidebar.sidebar-item>

            {{-- Footer --}}
            <x-slot:footer>
                <a href="#" class="flex flex-col justify-center py-3 focus:outline-none">
                    <x-theme.theme-toggler />
                    <p class="text-[8px] text-center text-gray-300 dark:text-white">developed by</p>
                    <p class="text-[10px] text-center font-bold text-white dark:text-green-400">Jessmann</p>
                    <p class="text-[8px] text-center text-gray-300 dark:text-white">©{{ date('Y') }}</p>
                </a>
            </x-slot:footer>
        </x-sidebar.sidebar>

        <!-- Page Content -->
        <main class="min-h-screen bg-gray-200 dark:bg-zinc-900 ml-0 sm:ml-16 p-4">
            <x-navbar.navbar />
            {{ $slot }}
        </main>
    </div>
</body>

</html>
