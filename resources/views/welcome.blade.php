<x-app-layout>

    <container class=" flex flex-col items-center gap-[144px] sm:gap-[144px] min-[320px]:gap-[48px] my-[144px]">
        <section class="flex flex-col items-center gap-[70px] font-inter">
            <div class="flex flex-col items-center gap-[42px]">
            <p class="text-[74px] md:text-[74px] min-[320px]:text-[30px] font-bold text-center font-victor bg-gradient-text-transparent bg-clip-text bg-gradient-to-r from-emerald-100 from-10% via-orange-500 via-20% to-red-200 to-100% bg-clip-text uppercase text-transparent max-w-[1114px]">СОЗДАЁМ ЦИФРОВЫЕ РЕШЕНИЯ, КОТОРЫЕ РАБОТАЮТ</p>
            <h1 class="text-white text-[24px] md:text-[24px] min-[320px]:text-[12px] text-center max-w-[832px]">Образовательный проект МИДиС: от идеи до цифрового продукта. Мы слышим, вникаем и превращаем Ваши задачи в понятные, живые цифровые продукты</h1>

            </div>
            <x-secondary-button class=" flex justify-center w-[311px] h-[56px]">Оставить заявку</x-secondary-button>
        </section>
        <section class="flex flex-col gap-[48px] font-victor w-[100%]">
            <x-h1-gradient>НАШИ УСЛУГИ</x-h1-gradient>
            <div class="flex flex-wrap gap-[14px]">
                <a href="/services#service1" class="flex flex-col justify-between grow bg-white clip-sloped-25 p-[35px] content-end 2xl:gap-[auto] xl:gap-[auto] lg:gap-[auto] md:gap-[auto] sm:gap-[0px] min-[320px]:gap-[55px]
                hover:bg-darkgray hover:text-white">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRight.svg') }}" alt="#" class="w-[50px] sm:w-[50px] min-[320px]:w-[30px]"></div>
                    <p class="text-[64px] 2xl:text-[64px] lg:text-[64px] sm:text-[48px] min-[320px]:text-[16px] 2xl:max-w-[100%] lg:max-w-[465px]">ИССЛЕДОВАНИЯ И ГИПОТЕЗЫ</p>
                </a>
                <a href="/services#service2" class="flex flex-col justify-between grow border border-white text-white outline-[1,5px] rounded-[28px] min-[320px]:w-[320px] md:w-[426px] xl:gap-[128px] lg:gap-[72px] sm:gap-[0px] min-[320px]:gap-[55px] p-[35px] content-end shrink-0
                hover:bg-darkgray hover:text-white">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRightwhite.svg') }}" alt="#" class="w-[50px] sm:w-[50px] min-[320px]:w-[30px]"></div>
                    <p class="text-[48px] sm:text-[48px] min-[320px]:text-[16px]">СОЗДАНИЕ САЙТОВ НА TILDA</p>
                </a>
                <a href="/services#service3" class="flex flex-col justify-between grow border border-white text-white outline-[1,5px] rounded-[28px] min-[320px]:w-[320px] md:w-[426px] gap-[63px] sm:gap-[0px] min-[320px]:gap-[55px] p-[35px] content-end shrink-0
                hover:bg-darkgray hover:text-white">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRightwhite.svg') }}" alt="#" class="w-[50px] sm:w-[50px] min-[320px]:w-[30px]"></div>
                    <p class="text-[48px] sm:text-[48px] min-[320px]:text-[16px]">СОЗДАНИЕ ПРИЛОЖЕНИЙ С VR-ТЕХНОЛОГИЯМИ</p>
                </a>
                <a href="/services#service4" class="flex flex-col justify-between grow bg-white clip-sloped-25 p-[35px] content-end lg:gap-[auto] md:gap-[auto] sm:gap-[0px] min-[320px]:gap-[55px]
                hover:bg-darkgray hover:text-white">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRight.svg') }}" alt="#" class="w-[50px] sm:w-[50px] min-[320px]:w-[30px]"></div>
                    <p class="text-[64px] 2xl:text-[64px] lg:text-[64px] sm:text-[48px] min-[320px]:text-[16px] 2xl:max-w-[100%]  xl:max-w-[689px] lg:max-w-[384px] ">СОЗДАНИЕ ПРОТОТИПОВ САЙТА</p>
                </a>
            </div>
        </section>
        <section class="flex about-goals section-display font-victor w-[100%]">
            <x-h1-gradient class="text-[64px] text-white">ДОСТИЖЕНИЯ</x-h1-gradient>
            <div class="about-goals-num-wrapper flex flex-row sm:flex-row min-[320px]:flex-col">
                <div class="about-goals-num flex flex-1 flex-col grow items-center">
                    <h2 class="text-[200px] lg:text-[200px] min-[320px]:text-[110px] font-bold">80+</h2>
                    <span class="text-white font-inter sm:text-[24px] min-[320px]:text-[12px]">Завершённых проектов</span>
                </div>
                <div class="about-goals-num flex flex-1 flex-col grow items-center">
                    <h2 class="text-[200px] lg:text-[200px] min-[320px]:text-[110px] font-bold">4</h2>
                    <span class="text-white font-inter sm:text-[24px] min-[320px]:text-[12px]">Направления работ</span>
                </div>
                <div class="about-goals-num flex flex-1 flex-col grow items-center">
                    <h2 class="text-[200px] lg:text-[200px] min-[320px]:text-[110px] font-bold">25</h2>
                    <span class="text-white font-inter Z">Постоянных клиентов</span>
                </div>
            </div>
        </section>
        <section class="flex flex-col gap-[48px] w-[100%] font-inter">
            <x-h1-gradient class="text-[64px] text-white font-victor">НАШИ РАБОТЫ</x-h1-gradient>
            
        </section> 

        <section class="flex flex-col gap-[48px] font-victor w-[100%]">
            <x-h1-gradient class="text-[64px] text-white">ПОЧЕМУ ВЫБИРАЮТ НАС</x-h1-gradient>
           <div class="swiper SwiperWelcome w-[100%]">
            <div class="swiper-wrapper flex flex-row gap-[14px] w-[100%]">
                <div class="swiper-slide flex justify-center items-center shrink-0 outline-[1,5px] rounded-[28px] w-[426px] sm:w-[426px] min-[320px]:w-[184px] h-[365px]  sm:h-[365px] min-[320px]:h-[158px] bg-gradient p-[63px]">
                    <h1 class="text-[32px] sm:text-[32px] min-[320px]:text-[12px] text-white">ТЕСТИРОВАНИЕ ВАШЕГО САЙТА ЗА 1 ДЕНЬ С УЧАСТИЕМ >500 ЧЕЛОВЕК</h1>
                </div>
                <div class="swiper-slide flex justify-center items-center shrink-0 outline-[1,5px] rounded-[170px] w-[426px] sm:w-[426px] min-[320px]:w-[184px] h-[365px]  sm:h-[365px] min-[320px]:h-[158px] bg-white p-[52px]">
                    <h1 class="text-[28px] sm:text-[28px] min-[320px]:text-[12px]">ЭФФЕКТИВНОЕ РЕШЕНИЕ ВАШИХ ЗАДАЧ БЛАГОДАРЯ РАБОТЕ БОЛЬШОЙ КОМАНДЫ</h1>
                </div>
                <div class="swiper-slide flex justify-center items-center shrink-0 outline-[1,5px] rounded-[28px] w-[426px] sm:w-[426px] min-[320px]:w-[184px] h-[365px]  sm:h-[365px] min-[320px]:h-[158px] bg-gradient clip-sloped-25 px-[55px]">
                    <h1 class="text-[32px] sm:text-[32px] min-[320px]:text-[12px] text-white">ПРОЗРАЧНЫЕ СРОКИ И ПРОЦЕССЫ</h1>
                </div>
                <div class="swiper-slide flex justify-center items-center shrink-0 outline-[1,5px] rounded-[170px] w-[426px] sm:w-[426px] min-[320px]:w-[184px] h-[365px]  sm:h-[365px] min-[320px]:h-[158px] bg-white p-[52px]">
                    <h1 class="text-[28px] sm:text-[28px] min-[320px]:text-[12px]">ОПЫТ В РАЗНЫХ ОТРАСЛЯХ: EDTECH, РИТЕЙЛ, МЕДИЦИНА, КУЛЬТУРА</h1>
                </div>
                <div class="swiper-slide flex justify-center items-center shrink-0 outline-[1,5px] rounded-[28px] w-[426px] sm:w-[426px] min-[320px]:w-[184px] h-[365px]  sm:h-[365px] min-[320px]:h-[158px] bg-gradient p-[63px]">
                    <h1 class="text-[32px] sm:text-[32px] min-[320px]:text-[12px] text-white">ГЛУБОКАЯ UX-ЭКСПЕРТИЗА</h1>
                </div>
            </div>
        </div>
        </section>
        <section class="flex flex-col gap-[48px] w-[100%] font-inter">
            <x-h1-gradient class="text-[64px] text-white font-victor">НАШИ ПАРТНЕРЫ</x-h1-gradient>
            <div class="swiper SwiperWelcomepartners w-[100%]">
                <div class="swiper-wrapper flex flex-row grow gap-[8px] w-[100%]">
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px]" src="{{ Vite::asset('resources/images/part-aero.png') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px] ">Платформа развлечений на борту ПАО «Аэрофлот»</p>
                    </div>
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px]" src="{{ Vite::asset('resources/images/part-ugmk.png') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px]">3D-тренажер для УГМК</p>
                    </div>
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px]" src="{{ Vite::asset('resources/images/part-uni.png') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px]">«Умная обувь»: прототип обуви будущего</p>
                    </div>
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px]" src="{{ Vite::asset('resources/images/part-mus.png') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px]">Виртуальный атлас-тренажер для ООО «ПрограмЛаб»</p>
                    </div>
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px]" src="{{ Vite::asset('resources/images/part-hyatt.png') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px]">Business case for human resources management</p>
                    </div>
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px]" src="{{ Vite::asset('resources/images/part-bank.png') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px]">Выявление актуальных схем финансового мошенничества</p>
                    </div>
                </div> 
            </div>
        </section>
        <section class="flex lg:flex-row min-[320px]:flex-col gap-[48px] w-[100%] place-content-between">
            <x-h1-gradient class="text-[64px] text-white font-victor w-[307px] ">ОТЗЫВЫ КЛИЕНТОВ</x-h1-gradient>
            <div class="flex flex-col gap-[20px]">
               <x-cardtwo></x-cardtwo>
               <x-cardtwo></x-cardtwo>
            </div>
        </section>
        <x-form-order></ x-form-order>
        <section class="about-form grid grid-cols-2 font-inter w-[100%] font-inter">
            
        </section>

    </container>


</x-app-layout>
