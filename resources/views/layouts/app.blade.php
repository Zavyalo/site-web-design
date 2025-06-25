<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="keywords" content="веб-дизайн, верстка на Tilda, UX-исследования VR-приложения, создание сайтов">
        <meta name="description" content="Услуги и описание мастерской «Цифровые решения» МИДиС">
        <meta property="og:title" content="Мастерская «Цифровые решения» МИДиС">
        <meta property="og:site_name" content="Цифровые решения">
        <meta property="og:url" content="ссылка на сайт">
        <meta property="og:description" content="Каталог товаров магазина натуральной косметики Bloom Beauty">
        <meta property="og:image" content="ссылка">

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
        <header class="fixed top-0 z-10 w-full" >
            <div class="flex bg-black justify-center container mx-auto px-[15px]">
                <div class="flex flex-row my-space-26 justify-between w-full">
                    <div class="flex flex-row gap-space-16 items-center">
                        <img class="w-10 h-10 hidden max-lg:block" id="btn-show-burger-panel" src="{{ Vite::asset('resources/images/Menu.svg') }}" alt="Открыть меню">
                        <img class="w-9 h-9" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="МИДиС">
                        <div class="w-20 text-white font-semibold leading-5 max-[400px]:hidden"><a href="/">Цифровые решения</a></div>
                    </div>
                    <ul class="flex flex-row bg-white rounded-full justify-center items-center gap-space-4 px-space-4 max-lg:hidden">
                        <li class="flex justify-center rounded-full px-space-16 py-space-4 {{ request()->is('/') ? 'text-white bg-gradient' : null }}"><a href="/">Главная</a></li>
                        <li class="flex justify-center rounded-full px-space-16 py-space-4 {{ request()->is('about') ? 'text-white bg-gradient' : null }}"><a href="/about">О нас</a></li>
                        <li class="flex justify-center rounded-full px-space-16 py-space-4 {{ request()->is('services') ? 'text-white bg-gradient' : null }}"><a href="/services">Услуги</a></li>
                        <li class="flex justify-center rounded-full px-space-16 py-space-4 {{ request()->is('blog') ? 'text-white bg-gradient' : null }}"><a href="/blog">Блог</a></li>
                        <li class="flex justify-center rounded-full px-space-16 py-space-4 {{ request()->is('portfolio') ? 'text-white bg-gradient' : null }}"><a href="/portfolio">Портфолио</a></li>
                    </ul>
                    <div class="flex flex-row gap-8 max-[1100px]:gap-space-10">
                    <div class="flex flex-row bg-darkgray text-white rounded-full justify-center items-center px-space-4 gap-space-4 max-[500px]:hidden">
                        <div class="flex justify-center text-black bg-white rounded-full px-space-4 py-space-4">RU</div>
                        <div class="flex justify-center rounded-full px-space-4 py-space-4">EN</div>
                    </div>
                    <x-secondary-button>Оставить заявку</x-secondary-button>
                    </div>
                    </div>
            </div>
            
        </header>
        <main class="container mx-auto px-[15px] mt-60 max-lg:mt-40">

            <div class="bg-darkgray w-70 top-0 left-0 z-10 px-space-20 pt-space-26 pb-space-144 burger-panel absolute" id="menu__burger">
                <div class="flex flex-row justify-between mb-space-26">
                <div class="flex flex-row gap-space-16 items-center">
                    <img class="w-9 h-9" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="МИДиС">
                    <div class="w-20 text-white font-semibold leading-5"><a href="/">Цифровые решения</a></div> <div class=""></div>
                </div>
                <img class="w-10 h-10 block" id="btn-close-burger-panel" src="{{ Vite::asset('resources/images/Close_round_light.svg') }}" alt="Закрыть меню">
                </div>
                <ul class="flex flex-col gap-space-10">
                    <li class="w-50 flex justify-center rounded-full py-1 {{ request()->is('/') ? 'text-white bg-gradient' : 'text-black bg-white' }}">
                    <a href="/" class="py-1 px-20">Главная</a></li>
                    <li class="w-60 flex justify-center rounded-full py-1 {{ request()->is('about') ? 'text-white bg-gradient' : 'text-black bg-white' }}">
                    <a href="/about" class="py-1 px-20">О нас</a></li>
                    <li class="w-60 flex justify-center text-black bg-white rounded-full py-1 {{ request()->is('services') ? 'text-white bg-gradient' : 'text-black bg-white' }}">
                    <a href="/services" class="py-1 px-20">Услуги</a></li>
                    <li class="w-60 flex justify-center text-black bg-white rounded-full py-1 {{ request()->is('blog') ? 'text-white bg-gradient' : 'text-black bg-white' }}">
                    <a href="/blog" class="py-1 px-20">Блог</a></li>
                    <li class="w-60 flex justify-center text-black bg-white rounded-full py-1 {{ request()->is('portfolio') ? 'text-white bg-gradient' : 'text-black bg-white' }}">
                    <a href="/portfolio" class="py-1 px-20">Портфолио</a></li>
                </ul>
                <div class="w-20 flex flex-row bg-black text-white rounded-full justify-center items-center py-1 gap-space-4 mt-space-26">
                    <div class="flex justify-center text-black bg-white rounded-full px-space-4 py-space-4">RU</div>
                    <div class="flex justify-center rounded-full px-space-4 py-space-4">EN</div>
                </div>
            </div>

            <x-FAQ></x-FAQ>

            {{ $slot }}
        </main>
        <footer class="bg-darkgray flex flex-row justify-center p-space-48 justify-between text-white max-lg:p-space-32 max-[420px]:flex-col gap-space-32">
            <div class="flex flex-col gap-space-16">
            <div class="flex flex-row gap-space-16 items-center">
                <img class="w-9 h-9" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="МИДиС">
                <div class="w-20 text-white font-semibold leading-5"><a href="/">Цифровые решения</a></div>
            </div>
            <p>+7 951 770 70-21</p>
            <ul class="flex flex-row gap-space-20 max-[800px]:flex-col gap-1">
                <li><a href="#" class="flex flex-row gap-space-10 text-sm"><img class="w-4 h-4" src="{{ Vite::asset('resources/images/icon_whatsapp.svg') }}" alt="">WhatsApp</a></li>
                <li><a href="#" class="flex flex-row gap-space-10 text-sm"><img class="w-4 h-4" src="{{ Vite::asset('resources/images/icon_tg.svg') }}" alt="">Telegram</a></li>
                <li><a href="#" class="flex flex-row gap-space-10 text-sm"><img class="w-4 h-4" src="{{ Vite::asset('resources/images/icon_vk.svg') }}" alt="">BK</a></li>
            </ul>
            </div>
            <div class="flex flex-row gap-20 max-[800px]:gap-6">
            <ul class="max-[576px]:hidden">
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
