<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

        {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Victor+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet"> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <header class="flex flex-row m-8 justify-center">
            <div class="flex flex-row">
                <img src="resourses/images/logo.svg" alt="">
                <div class="">Цифровые решения</div>
            </div>
            <ul class="flex flex-row bg-white w-100 rounded-full justify-center items-center gap-4">
                <li><a href="flex flex-row justify-center color-white bg-black"></a>Главная</li>
                <li><a href="flex flex-row justify-center"></a>О нас</li>
                <li><a href="flex flex-row justify-center"></a>Услуги</li>
                <li><a href="flex flex-row justify-center"></a>Блог</li>
                <li><a href="flex flex-row justify-center"></a>Портфолио</li>
            </ul>
            <div class="flex flex-row">
                <div class="lang__ru">RU</div>
                <div class="lang__en">EN</div>
            </div>
            <x-secondary-button>Оставить заявку</x-secondary-button>
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer>
            подвал
        </footer>
    </body>
</html>
