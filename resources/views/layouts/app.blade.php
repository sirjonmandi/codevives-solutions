<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }} ">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer ></script>
        <script src="{{asset('./assets/js/init-alpine.js')}}"></script>
    </head>
    <body>
        <div class="flex h-screen bg-gray-50 " :class="{ 'overflow-hidden': isSideMenuOpen}">
            @include('layouts.sidebar')
            <div class="flex flex-col flex-1">
                @include('layouts.navigation')
                <!-- Page Content -->
                <main class="h-full pb-16 overflow-y-auto">
                    <div class="container px-6 mx-auto grid">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
