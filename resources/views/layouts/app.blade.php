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

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Victor+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-inter bg-black">
        <header class="flex flex-row justify-center my-space-32 mx-space-70 justify-between">
            <div class="flex flex-row gap-space-16 items-center">
                <img class="w-9 h-9" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="МИДиС">
                <div class="w-20 text-white font-semibold leading-5"><a href="/welcome">Цифровые решения</a></div>
            </div>
            <ul class="flex flex-row bg-white rounded-full justify-center items-center gap-space-10 px-space-4">
                <li class="flex justify-center text-white bg-gradient rounded-full px-space-10 py-space-4"><a href="#"></a>Главная</li>
                <li class="flex justify-center rounded-full px-3 py-1"><a href="/about">О нас</a></li>
                <li class="flex justify-center rounded-full px-3 py-1"><a href="/services">Услуги</a></li>
                <li class="flex justify-center rounded-full px-3 py-1"><a href="/blog">Блог</a></li>
                <li class="flex justify-center rounded-full px-3 py-1"><a href="/portfolio">Портфолио</a></li>
            </ul>
            <div class="flex flex-row gap-8">
            <div class="flex flex-row bg-darkgray text-white rounded-full justify-center items-center px-space-4 gap-space-4">
                <div class="flex justify-center text-black bg-white rounded-full px-space-4 py-space-4">RU</div>
                <div class="flex justify-center rounded-full px-space-4 py-space-4">EN</div>
            </div>
            <x-secondary-button>Оставить заявку</x-secondary-button>
            </div>
        </header>
        <main class="container mx-space-70">
            {{ $slot }}
        </main>
        <footer class="bg-darkgray flex flex-row justify-center p-space-48 pb-space-70 justify-between text-white">
            <div class="flex flex-col gap-space-16">
            <div class="flex flex-row gap-space-16 items-center">
                <img class="w-9 h-9" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="МИДиС">
                <div class="w-20 text-white font-semibold leading-5"><a href="/welcome">Цифровые решения</a></div>
            </div>
            <p>+7 951 770 70-21</p>
            <ul class="flex flex-row gap-space-20">
                <li><a href="#" class="flex flex-row gap-space-10 text-sm"><img class="w-4 h-4" src="{{ Vite::asset('resources/images/icon_whatsapp.svg') }}" alt="">WhatsApp</a></li>
                <li><a href="#" class="flex flex-row gap-space-10 text-sm"><img class="w-4 h-4" src="{{ Vite::asset('resources/images/icon_tg.svg') }}" alt="">Telegram</a></li>
                <li><a href="#" class="flex flex-row gap-space-10 text-sm"><img class="w-4 h-4" src="{{ Vite::asset('resources/images/icon_vk.svg') }}" alt="">BK</a></li>
            </ul>
            </div>
            <div class="flex flex-row gap-20">
            <ul>
                <li><a href="/about">О мастерской</a></li>
                <li><a href="/services">Наши услуги</a></li>
                <li><a href="/portfolio">Порфолио</a></li>
                <li><a href="/blog">Блог</a></li>
            </ul>
            <div class="h-20"><x-secondary-button>Оставить заявку</x-secondary-button></div>
            </div>
        </footer>
    </body>
</html>
