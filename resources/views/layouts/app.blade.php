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
        <header class="text-main bg-tahiti-200">
            <div class="logo">
                <div class="logo__img"></div>
                <div class="logo__img">Цифровые решения</div>
            </div>
            <ul>
                <li><a href=""></a>Главная</li>
                <li><a href=""></a>О нас</li>
                <li><a href=""></a>Услуги</li>
                <li><a href=""></a>Блог</li>
                <li><a href=""></a>Портфолио</li>
            </ul>
            <div class="lang">
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
