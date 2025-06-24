<x-app-layout>

    <container class=" flex flex-col items-center gap-[144px] my-[144px]">
        <section class="flex flex-col items-center gap-[70px] font-inter">
            <div class="flex flex-col items-center gap-[42px]">
            <p class="text-7xl text-white text-center font-victor max-w-[1114px]">СОЗДАЁМ ЦИФРОВЫЕ РЕШЕНИЯ, КОТОРЫЕ РАБОТАЮТ</p>
            <h1 class="text-white text-2xl text-center max-w-[832px]">Образовательный проект МИДиС: от идеи до цифрового продукта. Мы слышим, вникаем и превращаем Ваши задачи в понятные, живые цифровые продукты</h1>

            </div>
            <x-secondary-button class=" flex justify-center w-[311px] h-[56px]">Оставить заявку</x-secondary-button>
        </section>
        <section class="flex flex-col gap-[48px] font-victor w-[100%]">
            <x-h1-gradient>НАШИ УСЛУГИ</x-h1-gradient>
            <div class="flex flex-wrap gap-[14px]">
                <a href="/services#service1" class="flex flex-col justify-between grow bg-white clip-sloped-25 p-[35px] content-end ">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRight.svg') }}" alt="#" class="w-[50px]"></div>
                    <h1 class="text-[64px]">ИССЛЕДОВАНИЯ И ГИПОТЕЗЫ</h1>
                </a>
                <a href="/services#service2" class="flex flex-col justify-between border border-white text-white outline-[1,5px] rounded-[28px] w-[426px] h-[413px] p-[35px] content-end shrink-0">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRightwhite.svg') }}" alt="#" class="w-[50px]"></div>
                    <h1 class="text-[48px]">СОЗДАНИЕ САЙТОВ НА TILDA</h1>
                </a>
                <a href="/services#service3" class="flex flex-col justify-between border border-white text-white outline-[1,5px] rounded-[28px] w-[426px] h-[413px] p-[35px] content-end shrink-0">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRightwhite.svg') }}" alt="#" class="w-[50px]"></div>
                    <h1 class="text-[48px]">СОЗДАНИЕ ПРИЛОЖЕНИЙ С VR-ТЕХНОЛОГИЯМИ</h1>
                </a>
                <a href="/services#service4" class="flex flex-col justify-between grow bg-white clip-sloped-25 p-[35px] content-end ">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRight.svg') }}" alt="#" class="w-[50px]"></div>
                    <h1 class="text-[64px]">СОЗДАНИЕ ПРОТОТИПОВ САЙТА</h1>
                </a>
            </div>
        </section>
        <section class="flex about-goals section-display font-victor w-[100%]">
            <h1 class="text-[64px] text-white">ДОСТИЖЕНИЯ</h1>
            <div class="about-goals-num-wrapper flex flex-row">
                <div class="about-goals-num flex flex-1 flex-col grow items-center">
                    <h2 class="text-[200px] font-bold">80+</h2>
                    <span class="text-white font-inter">Завершённых проектов</span>
                </div>
                <div class="about-goals-num flex flex-1 flex-col grow items-center">
                    <h2 class="text-[200px] font-bold">4</h2>
                    <span class="text-white font-inter">Направления работ</span>
                </div>
                <div class="about-goals-num flex flex-1 flex-col grow items-center">
                    <h2 class="text-[200px] font-bold">25</h2>
                    <span class="text-white font-inter">Постоянных клиентов</span>
                </div>
            </div>
        </section>
        <section class="flex flex-col gap-[48px] w-[100%] font-inter">
            <h1 class="text-[64px] text-white font-victor">НАШИ РАБОТЫ</h1>
            
        </section> 

        <section class="flex flex-col gap-[48px] font-victor w-[100%]">
            <h1 class="text-[64px] text-white">ПОЧЕМУ ВЫБИРАЮТ НАС</h1>
            <div class="flex flex-row gap-[14px] overflow-hidden">
                <div class="flex justify-center items-center outline-[1,5px] shrink-0 rounded-[28px] w-[426px] h-[365px] bg-gradient p-[63px]">
                    <h1 class="text-[32px] text-white">ТЕСТИРОВАНИЕ ВАШЕГО САЙТА ЗА 1 ДЕНЬ С УЧАСТИЕМ >500 ЧЕЛОВЕК</h1>
                </div>
                <div class="flex justify-center items-center outline-[1,5px] shrink-0 rounded-[170px] w-[426px] h-[365px] bg-white p-[52px]">
                    <h1 class="text-[28px] ">ЭФФЕКТИВНОЕ РЕШЕНИЕ ВАШИХ ЗАДАЧ БЛАГОДАРЯ РАБОТЕ БОЛЬШОЙ КОМАНДЫ</h1>
                </div>
                <div class="flex justify-center items-center outline-[1,5px] shrink-0 rounded-[28px] w-[426px] h-[365px] bg-gradient clip-sloped-25 px-[55px]">
                    <h1 class="text-[32px] text-white">ПРОЗРАЧНЫЕ СРОКИ И ПРОЦЕССЫ</h1>
                </div>
                <div class="flex justify-center items-center outline-[1,5px] shrink-0 rounded-[170px] w-[426px] h-[365px] bg-white p-[52px]">
                    <h1 class="text-[28px]">ОПЫТ В РАЗНЫХ ОТРАСЛЯХ: EDTECH, РИТЕЙЛ, МЕДИЦИНА, КУЛЬТУРА</h1>
                </div>
                <div class="flex justify-center items-center outline-[1,5px] shrink-0 rounded-[28px] w-[426px] h-[365px] bg-gradient p-[63px]">
                    <h1 class="text-[32px] text-white">ГЛУБОКАЯ UX-ЭКСПЕРТИЗА</h1>
                </div>
            </div>
        </section>
        <section class="flex flex-col gap-[48px] w-[100%]">
            <h1 class="text-[64px] text-white font-victor">НАШИ ПАРТНЕРЫ</h1>
            <div class="flex flex-row grow gap-[8px] overflow-hidden">
                <div class="flex flex-1 flex-col grow gap-5">
                    <img class="" src="{{ Vite::asset('resources/images/part-aero.png') }}" alt="">
                    <p class="text-white font-inter text-[15px]">Платформа развлечений на борту ПАО «Аэрофлот»</p>
                </div>
                <div class="flex flex-1 flex-col grow gap-5">
                    <img class="" src="{{ Vite::asset('resources/images/part-ugmk.png') }}" alt="">
                    <p class="text-white font-inter text-[15px]">3D-тренажер для УГМК</p>
                </div>
                <div class="flex flex-1 flex-col grow gap-5">
                    <img class="" src="{{ Vite::asset('resources/images/part-uni.png') }}" alt="">
                    <p class="text-white font-inter text-[15px]">«Умная обувь»: прототип обуви будущего</p>
                </div>
                <div class="flex flex-1 flex-col grow gap-5">
                    <img class="" src="{{ Vite::asset('resources/images/part-mus.png') }}" alt="">
                    <p class="text-white font-inter text-[15px]">Виртуальный атлас-тренажер для ООО «ПрограмЛаб»</p>
                </div>
                <div class="flex flex-1 flex-col grow gap-5">
                    <img class="" src="{{ Vite::asset('resources/images/part-hyatt.png') }}" alt="">
                    <p class="text-white font-inter text-[15px]">Business case for human resources management</p>
                </div>
                <div class="flex flex-1 flex-col grow gap-5">
                    <img class="" src="{{ Vite::asset('resources/images/part-bank.png') }}" alt="">
                    <p class="text-white font-inter text-[15px]">Выявление актуальных схем финансового мошенничества</p>
                </div>
            </div>
        </section>
        <section class="flex flex-row gap-[48px] w-[100%]">
            <h1 class="text-[64px] text-white font-victor">ОТЗЫВЫ КЛИЕНТОВ</h1>
            <div class="flex flex-col">

            </div>
        </section>
        <section class="about-form grid grid-cols-2 font-inter w-[100%] font-inter">
            <div class="about-form-text-wrapper flex flex-col gap-[26px]">
                <h1 class="text-[64px] text-white font-victor">СВЯЖИТЕСЬ С НАМИ</h1>
                <p class="text-white">Оставьте заявку и мы свяжемся с вами или позвоните по номеру:</p>
                <a class="text-3xl font-bold text-white" href="#">+7(999)123-45-67</a>
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

    </container>


    <x-cardtwo></x-cardtwo>
</x-app-layout>
