<x-app-layout>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <h1 class="font-victor uppercase text-[64px] my-space-144 text-orange-600">Наши услуги</h1>
    <div class="flex flex-row justify-between mb-space-144 font-victor uppercase">
        <div class="flex items-center justify-center text-3xl h-[373px] w-[244px] p-space-26 text-white bg-gradient rounded-3xl
                    min-[320px]:mr-space-20 sm:mr-space-20 md:mr-space-20 xl:mr-space-20 lg:w-[244px] md:w-[244px] sm:w-[244px]">
            <p class="text-center">Создаем цифровые продукты с нуля</p>
        </div>
        <div class="flex items-center justify-center text-3xl h-[373px] w-[244px] p-space-26 bg-white rounded-full 
                    min-[320px]:mr-space-20 sm:mr-space-20 md:mr-space-20 xl:mr-space-20">
            <p class="text-center">Проводим исследования</p>
        </div>
        <div class="flex items-center justify-center text-3xl h-[373px] w-[244px] p-space-26 clip-sloped-25 text-white bg-gradient rounded-3xl 
                    min-[320px]:mr-space-20 sm:mr-space-20 md:mr-space-20 xl:mr-space-20">
            <p class="text-center">проектируем интерфейсы</p>
        </div>
        <div class="flex items-center justify-center text-3xl h-[373px] w-[244px] p-space-26 bg-white rounded-full 
                    min-[320px]:mr-space-20 sm:mr-space-20 md:mr-space-20 xl:mr-space-20">
            <p class="text-center">разрабатываем сайты на tilda</p>
        </div>
        <div class="flex items-center justify-center text-3xl h-[373px] w-[244px] p-space-26 text-white bg-gradient rounded-3xl 
                    min-[320px]:mr-space-20 sm:mr-space-20 md:mr-space-20 xl:mr-space-20">
            <p class="text-center">создаем vr-решения</p>
        </div>
    </div>

    <div class="flex flex-row justify-between mb-space-144 sm:flex-wrap min-[320px]:flex-wrap lg:flex-nowrap max-[1280px]:flex-col" id="service1">
        <div class="flex flex-col justify-between sm:pb-space-32 min-[320px]:pb-space-32">
            <div class="flex flex-row mb-space-48 sm:mb-space-20 min-[320px]:mb-space-20">
                <h2 class="font-victor uppercase lg:text-3xl md:text-3xl xl:text-3xl max-[1280px]:text-3xl text-red-500 pr-space-4 sm:text-base min-[320px]:text-base">(01)</h2>
                <h2 class="font-victor uppercase lg:text-3xl md:text-3xl xl:text-3xl max-[1280px]:text-3xl text-white sm:text-base min-[320px]:text-base"> Исследования и гипотезы</h2>
            </div>
            <div class="mb-space-48 font-victor uppercase">
                <p class="font-victor text-lightgray lg:pb-space-16 md:pb-space-16 xl:pb-space-16 max-[1280px]:pb-space-16 sm:pb-space-4 min-[320px]:pb-space-4 sm:text-xs min-[320px]:text-xs
                        lg:text-base md:text-base xl:text-base max-[1280px]:text-base mr-space-70 w-[500px] break-words">Кому подходит: стартапы, компании с новым продуктом</p>
                <p class="font-victor text-lightgray sm:text-xs min-[320px]:text-xs lg:text-base md:text-base xl:text-base max-[1280px]:text-base mr-space-70">Методы: user-flow, сценарии, pain points, CJM</p>
            </div>
            <div class="flex flex-row justify-between">
                <div class="flex flex-col justify-between lg:flex-nowrap">
                    <div class="flex 2xl:flex-row mb-space-48 min-[320px]:flex-wrap lg:flex-nowrap lg:flex-row sm:mb-space-20 min-[320px]:mb-space-20 mr-space-70">
                        <div class="pr-space-70 sm:pb-space-26 min-[320px]:pb-space-26 lg:flex-nowrap lg:flex-row">
                            <p class="font-victor uppercase text-white text-base font-semibold max-[1280px]:pb-space-16 lg:pb-space-16 md:pb-space-16 min-[320px]:pb-space-10 sm:pb-space-10">Что делаем:</p>
                            <ul class="font-inter text-white text-base font-light">
                                <li>> Интервью с пользователями</li>
                                <li>> Анализ конкурентов</li>
                                <li>> Карты CJM</li>
                                <li>> A/B-тесты и быстрые MVP</li>
                                <li>> Поведенческая аналитика</li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-victor uppercase text-white text-base font-semibold max-[1280px]:pb-space-16 lg:pb-space-16 md:pb-space-16 min-[320px]:pb-space-10 sm:pb-space-10">Что получает клиент:</p>
                            <ul class="font-inter text-white text-base font-light">
                                <li>> Чёткие выводы и инсайты</li>
                                <li>> Верифицированные гипотезы</li>
                                <li>> Конкретные рекомендации и приоритеты для запуска</li>
                            </ul>
                        </div>
                    </div>
                    <span class="flex items-center justify-center bg-white font-semibold py-2 px-4 rounded-full h-[46px] w-[145px]">От 18 000</span>
                </div>
            </div>
        </div>
        <img src="{{ Vite::asset('resources/images/serves1.jpg') }}" alt="" class="clip-sloped-25 flex-shrink-0 
                    max-[1280px]:h-[500px] max-[1280px]:w-[645px] rounded-3xl
                    md:h-[400px] sm:h-[350px] sm:w-[470px]
                    min-[320px]:h-[250px] min-[320px]:w-[350px]">
    </div>

    <div class="flex flex-row justify-between mb-space-144 sm:flex-wrap min-[320px]:flex-wrap lg:flex-nowrap max-[1280px]:flex-col" id="service2">
        <div class="flex flex-col justify-between sm:pb-space-32 min-[320px]:pb-space-32">
            <div class="flex flex-row mb-space-48 sm:mb-space-20 min-[320px]:mb-space-20">
                <h2 class="font-victor uppercase lg:text-3xl md:text-3xl xl:text-3xl max-[1280px]:text-3xl text-red-500 pr-space-4 sm:text-base min-[320px]:text-base">(02)</h2>
                <h2 class="font-victor uppercase lg:text-3xl md:text-3xl xl:text-3xl max-[1280px]:text-3xl text-white sm:text-base min-[320px]:text-base"> Создание прототипов сайтов</h2>
            </div>
            <div class="mb-space-48 uppercase sm:mb-space-20 min-[320px]:mb-space-20">
                <p class="font-victor text-lightgray lg:pb-space-16 md:pb-space-16 xl:pb-space-16 max-[1280px]:pb-space-16 sm:pb-space-4 min-[320px]:pb-space-4 sm:text-xs min-[320px]:text-xs
                        lg:text-base md:text-base xl:text-base max-[1280px]:text-base mr-space-70 w-[500px] break-words">Кому подходит: тем, кто запускает новый продукт, редизайн, платформу, личный кабинет или сервисную систему.</p>
                <p class="font-victor text-lightgray sm:text-xs min-[320px]:text-xs lg:text-base md:text-base xl:text-base max-[1280px]:text-base mr-space-70">Методы: user-flow, сценарии, pain points, CJM</p>
            </div>
            <div class="flex flex-row justify-between">
                <div class="flex flex-col justify-between lg:flex-nowrap">
                    <div class="flex 2xl:flex-row mb-space-48 min-[320px]:flex-wrap lg:flex-nowrap lg:flex-row sm:mb-space-20 min-[320px]:mb-space-20 mr-space-70">
                        <div class="pr-space-70 sm:pb-space-26 min-[320px]:pb-space-26 lg:flex-nowrap lg:flex-row">
                            <p class="font-victor uppercase text-white text-base font-semibold max-[1280px]:pb-space-16 lg:pb-space-16 md:pb-space-16 min-[320px]:pb-space-10 sm:pb-space-10">Что делаем:</p>
                            <ul class="font-inter text-white text-base font-light">
                                <li>> User-flow</li>
                                <li>> Wireframes</li>
                                <li>> Карты CJM</li>
                                <li>> Кликабельные прототипы в Figma</li>
                                <li>> Тестирование на целевой аудитории</li>
                                <li>> Подготовка к передаче в дизайн или разработку</li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-victor uppercase text-white text-base font-semibold max-[1280px]:pb-space-16 lg:pb-space-16 md:pb-space-16 min-[320px]:pb-space-10 sm:pb-space-10">Что получает клиент:</p>
                            <ul class="font-inter text-white text-base font-light">
                                <li>> Прототип сайта</li>
                                <li>> Продуманную структуру страниц</li>
                                <li>> Понятный визуальный сценарий</li>
                                <li>> Возможность тестировать проект до его реализации</li>
                            </ul>
                        </div>
                    </div>
                    <span class="font-inter flex items-center justify-center bg-white font-semibold py-2 px-4 rounded-full h-[46px] w-[145px]">От 18 000</span>
                </div>
            </div>
        </div>
        <img src="{{ Vite::asset('resources/images/serves2.jpg') }}" alt="" class="rounded-full flex-shrink-0 
                    max-[1280px]:h-[500px] max-[1280px]:w-[645px]
                    md:h-[400px] sm:h-[350px] sm:w-[470px]
                    min-[320px]:h-[250px] min-[320px]:w-[350px]">
    </div>

    <div class="flex flex-row justify-between mb-space-144 sm:flex-wrap min-[320px]:flex-wrap lg:flex-nowrap max-[1280px]:flex-col" id="service3">
        <div class="flex flex-col justify-between sm:pb-space-32 min-[320px]:pb-space-32">
            <div class="flex flex-row mb-space-48 sm:mb-space-20 min-[320px]:mb-space-20">
                <h2 class="font-victor uppercase lg:text-3xl md:text-3xl xl:text-3xl max-[1280px]:text-3xl text-red-500 pr-space-4 sm:text-base min-[320px]:text-base">(03)</h2>
                <h2 class="font-victor uppercase lg:text-3xl md:text-3xl xl:text-3xl max-[1280px]:text-3xl text-white sm:text-base min-[320px]:text-base"> Создание сайтов на Tilda</h2>
            </div>
            <div class="mb-space-48 uppercase sm:mb-space-20 min-[320px]:mb-space-20">
                <p class="font-victor text-lightgray lg:pb-space-16 md:pb-space-16 xl:pb-space-16 max-[1280px]:pb-space-16 sm:pb-space-4 min-[320px]:pb-space-4 sm:text-xs min-[320px]:text-xs
                        lg:text-base md:text-base xl:text-base max-[1280px]:text-base mr-space-70 w-[500px] break-words">Кому подходит: тем, кто запускает новый продукт, редизайн, платформу, личный кабинет или сервисную систему.</p>
                <p class="font-victor text-lightgray sm:text-xs min-[320px]:text-xs lg:text-base md:text-base xl:text-base max-[1280px]:text-base mr-space-70">Методы: user-flow, сценарии, pain points, CJM</p>
            </div>
            <div class="flex flex-row justify-between">
                <div class="flex flex-col justify-between lg:flex-nowrap">
                    <div class="flex 2xl:flex-row mb-space-48 min-[320px]:flex-wrap lg:flex-nowrap lg:flex-row sm:mb-space-20 min-[320px]:mb-space-20 mr-space-70">
                        <div class="pr-space-70 sm:pb-space-26 min-[320px]:pb-space-26 lg:flex-nowrap lg:flex-row">
                            <p class="font-victor uppercase text-white text-base font-semibold max-[1280px]:pb-space-16 lg:pb-space-16 md:pb-space-16 min-[320px]:pb-space-10 sm:pb-space-10">Что делаем:</p>
                            <ul class="font-inter text-white text-base font-light">
                                <li>> User-flow</li>
                                <li>> Wireframes</li>
                                <li>> Карты CJM</li>
                                <li>> Кликабельные прототипы в Figma</li>
                                <li>> Тестирование на целевой аудитории</li>
                                <li>> Подготовка к передаче в дизайн или разработку</li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-victor uppercase text-white text-base font-semibold max-[1280px]:pb-space-16 lg:pb-space-16 md:pb-space-16 min-[320px]:pb-space-10 sm:pb-space-10">Что получает клиент:</p>
                            <ul class="font-inter text-white text-base font-light">
                                <li>> Прототип сайта</li>
                                <li>> Продуманную структуру страниц</li>
                                <li>> Понятный визуальный сценарий</li>
                                <li>> Возможность тестировать проект до его реализации</li>
                            </ul>
                        </div>
                    </div>
                    <span class="font-inter flex items-center justify-center bg-white font-semibold py-2 px-4 rounded-full h-[46px] w-[145px]">От 18 000</span>
                </div>
            </div>
        </div>
        <img src="{{ Vite::asset('resources/images/serves3.jpg') }}" alt="" class="flex-shrink-0 
                    max-[1280px]:h-[500px] max-[1280px]:w-[645px] rounded-3xl
                    md:h-[400px] sm:h-[350px] sm:w-[470px]
                    min-[320px]:h-[250px] min-[320px]:w-[350px]">
    </div>

    <div class="flex flex-row justify-between mb-space-144 sm:flex-wrap min-[320px]:flex-wrap lg:flex-nowrap max-[1280px]:flex-col" id="service4">
        <div class="flex flex-col justify-between sm:pb-space-32 min-[320px]:pb-space-32">
            <div class="flex flex-row mb-space-48 sm:mb-space-20 min-[320px]:mb-space-20">
                <h2 class="font-victor uppercase lg:text-3xl md:text-3xl xl:text-3xl max-[1280px]:text-3xl text-red-500 pr-space-4 sm:text-base min-[320px]:text-base">(04)</h2>
                <h2 class="font-victor uppercase lg:text-3xl md:text-3xl xl:text-3xl max-[1280px]:text-3xl text-white sm:text-base min-[320px]:text-base"> Создание приложений с VR-технологиями</h2>
            </div>
            <div class="mb-space-48 uppercase sm:mb-space-20 min-[320px]:mb-space-20">
                <p class="font-victor text-lightgray lg:pb-space-16 md:pb-space-16 xl:pb-space-16 max-[1280px]:pb-space-16 sm:pb-space-4 min-[320px]:pb-space-4 sm:text-xs min-[320px]:text-xs
                        lg:text-base md:text-base xl:text-base max-[1280px]:text-base mr-space-70 w-[500px] break-words">Кому подходит: тем, кто запускает новый продукт, редизайн, платформу, личный кабинет или сервисную систему.</p>
                <p class="font-victor text-lightgray sm:text-xs min-[320px]:text-xs lg:text-base md:text-base xl:text-base max-[1280px]:text-base mr-space-70">Методы: user-flow, сценарии, pain points, CJM</p>
            </div>
            <div class="flex flex-row justify-between">
                <div class="flex flex-col justify-between lg:flex-nowrap">
                    <div class="flex 2xl:flex-row mb-space-48 min-[320px]:flex-wrap lg:flex-nowrap lg:flex-row sm:mb-space-20 min-[320px]:mb-space-20 mr-space-70">
                        <div class="sm:pb-space-26 min-[320px]:pb-space-26 lg:flex-nowrap lg:flex-row">
                            <p class="font-victor uppercase text-white text-base font-semibold max-[1280px]:pb-space-16 lg:pb-space-16 md:pb-space-16 min-[320px]:pb-space-10 sm:pb-space-10">Что делаем:</p>
                            <ul class="font-inter text-white text-base font-light pr-space-48">
                                <li class="w-[300px] break-words">> Сценарии взаимодействия в VR</li>
                                <li class="w-[300px] break-words">> Дизайн и моделирование 3D-сред</li>
                                <li class="w-[300px] break-words">> Разработка приложений на Unity/WebXR</li>
                                <li class="w-[300px] break-words">> Поддержка под Oculus, WebVR, мобильные устройства</li>
                                <li class="w-[300px] break-words">> Видео-демо и инструкции по использованию</li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-victor uppercase text-white text-base font-semibold max-[1280px]:pb-space-16 lg:pb-space-16 md:pb-space-16 min-[320px]:pb-space-10 sm:pb-space-10">Что получает клиент:</p>
                            <ul class="font-inter text-white text-base font-light">
                                <li>> Готовое VR-решение под задачу</li>
                                <li>> Интерактивный пользовательский опыт</li>
                                <li>> Технологичный продукт, выделяющийся на рынке</li>
                                <li>> Простой в управлении интерфейс</li>
                            </ul>
                        </div>
                    </div>
                    <span class="font-inter flex items-center justify-center bg-white font-semibold py-2 px-4 rounded-full h-[46px] w-[145px]">От 18 000</span>
                </div>
            </div>
        </div>
        <div>
            <img src="{{ Vite::asset('resources/images/serves4.jpg') }}" alt="" class="rounded-full flex-shrink-0 
                    max-[1280px]:h-[500px] max-[1280px]:w-[645px]
                    md:h-[400px] sm:h-[350px] sm:w-[470px]
                    min-[320px]:h-[250px] min-[320px]:w-[350px]">
        </div>
    </div>

    <section class="about-form grid grid-cols-2 mb-space-144">
            <div class="about-form-text-wrapper flex flex-col gap-[26px]">
                <h1 class="text-[64px] text-white">СВЯЖИТЕСЬ С НАМИ</h1>
                <p class="text-white">Оставьте заявку и мы свяжемся с вами или позвоните по номеру:</p>
                <a class="text-3xl font-bold text-white" href="#">+7 (999) 123-45-67</a>
            </div>
            <fieldset class="about-form-input flex flex-col gap-y-[14px]">
                <div class="flex gap-[14px]">
                    <input class="flex grow border-none p-4 rounded-[100px]" type="text" name="form-name" id="" placeholder="Имя" required>
                    <input class="flex grow border-none p-4 rounded-[100px]" type="email" name="form-email" id="" placeholder="E-mail" required>
                </div>
            <input class="border-none p-4 rounded-[100px]" type="tel" name="form-telephone" id="" placeholder="Телефон" required>
            <textarea class="border-none p-4 rounded-3xl" type="text" name="form-text" id="" placeholder="Комментарий"></textarea>
            <div class="grid grid-cols-2">
                <div>
                <input type="checkbox" name="" id="submit-agreement">
                <label class="text-white" for="submit-agreement">Нажимая на кнопку, я соглашаюсь с&nbsp<a class="underline text-white" href="#">обработкой персональных данных</a></label>
                </div>
                <button class="form-submit bg-gradient p-4 font-medium text-white rounded-[100px]">Оставить заявку</button>
            </div>
            </fieldset>
        </section>

</x-app-layout>