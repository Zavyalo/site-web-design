<x-app-layout>

    <container class=" flex flex-col items-center sm:gap-[144px] min-[320px]:gap-[48px] sm:my-[144px] min-[320px]:my-[48px]">
        <section class="flex flex-col items-center gap-[70px] font-inter">
            <div class="flex flex-col items-center gap-[42px]">
            <p class="text-[74px] md:text-[74px] min-[320px]:text-[30px] font-bold text-center font-victor bg-gradient-text-transparent bg-clip-text bg-gradient-to-r from-emerald-100 from-10% via-orange-500 via-20% to-red-200 to-100% bg-clip-text uppercase text-transparent max-w-[1114px]">СОЗДАЁМ ЦИФРОВЫЕ РЕШЕНИЯ, КОТОРЫЕ РАБОТАЮТ</p>
            <h1 class="text-white text-[24px] md:text-[24px] min-[320px]:text-[12px] text-center max-w-[832px]">Образовательный проект МИДиС: от идеи до цифрового продукта. Мы слышим, вникаем и превращаем Ваши задачи в понятные, живые цифровые продукты</h1>

            </div>
            <x-btn-link class="flex justify-center w-[311px] h-[56px]">Оставить заявку</x-btn-link>
        </section>
        <section class="flex flex-col sm:gap-[48px] min-[320px]:gap-[32px] font-victor w-[100%]">
            <x-h1-white>НАШИ УСЛУГИ</x-h1-white>
            <div class="flex flex-wrap gap-[14px]">
                <a href="/services#service1" class="flex flex-col justify-between grow bg-white clip-sloped-25 p-[35px] content-end md:gap-[auto] sm:gap-[0px] min-[320px]:gap-[55px]
                hover:bg-darkgray hover:text-white">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRight.svg') }}" alt="#" class="w-[50px] sm:w-[50px] min-[320px]:w-[30px]"></div>
                    <p class="text-[64px] 2xl:text-[64px] lg:text-[64px] sm:text-[48px] min-[320px]:text-[16px] 2xl:max-w-[100%] lg:max-w-[620px]">UX-АУДИТ И АНАЛИТИКА</p>
                </a>
                <a href="/services#service2" class="flex flex-col justify-between grow border border-white text-white outline-[1,5px] rounded-[28px] min-[320px]:w-[301px] md:w-[426px] xl:gap-[128px] lg:gap-[72px] sm:gap-[0px] min-[320px]:gap-[55px] p-[35px] content-end shrink-0
                hover:bg-darkgray hover:text-white">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRightwhite.svg') }}" alt="#" class="w-[50px] sm:w-[50px] min-[320px]:w-[30px]"></div>
                    <p class="text-[48px] sm:text-[48px] min-[320px]:text-[16px]">РАЗРАБОТКА НА TILDA</p>
                </a>
                <a href="/services#service3" class="flex flex-col justify-between grow border border-white text-white outline-[1,5px] rounded-[28px] min-[320px]:w-[301px] md:w-[426px] gap-[63px] sm:gap-[0px] min-[320px]:gap-[55px] p-[35px] content-end shrink-0
                hover:bg-darkgray hover:text-white">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRightwhite.svg') }}" alt="#" class="w-[50px] sm:w-[50px] min-[320px]:w-[30px]"></div>
                    <p class="text-[48px] sm:text-[48px] min-[320px]:text-[16px]">СОЗДАНИЕ ПРИЛОЖЕНИЙ С VR-ТЕХНОЛОГИЯМИ</p>
                </a>
                <a href="/services#service4" class="flex flex-col justify-between grow bg-white clip-sloped-25 p-[35px] content-end lg:gap-[auto] md:gap-[auto] sm:gap-[0px] min-[320px]:gap-[55px]
                hover:bg-darkgray hover:text-white">
                    <div class="max-w-[100%] flex flex-row justify-end"><img src="{{ Vite::asset('resources/images/ArrowUpRight.svg') }}" alt="#" class="w-[50px] sm:w-[50px] min-[320px]:w-[30px]"></div>
                    <p class="text-[64px] 2xl:text-[64px] lg:text-[64px] sm:text-[48px] min-[320px]:text-[16px] 2xl:max-w-[100%]  xl:max-w-[689px] lg:max-w-[384px] ">ДИЗАЙН И ВЕРСТКА САЙТОВ</p>
                </a>
            </div>
        </section>
        <section class="flex flex-col about-goals section-display font-victor w-[100%] sm:gap-[48px] min-[320px]:gap-[32px]">
            <x-h1-white>ДОСТИЖЕНИЯ</x-h1-white>
            <div class="about-goals-num-wrapper flex flex-row sm:flex-row min-[320px]:flex-col gap-[20px]">
                <div class="about-goals-num flex flex-1 flex-col grow items-center sm:gap-[14px] min-[320px]:gap-[0px]">
                    <x-h1-gradient class="text-[200px] lg:text-[200px] min-[320px]:text-8xl font-bold">80+</x-h1-gradient>
                    <span class="text-white font-inter text-center lg:text-[24px] md:text-[12px]">Завершённых проектов</span>
                </div>
                <div class="about-goals-num flex flex-1 flex-col grow items-center sm:gap-[14px] min-[320px]:gap-[0px]">
                    <x-h1-gradient class="text-[200px] lg:text-[200px] min-[320px]:text-8xl font-bold">4</x-h1-gradient>
                    <span class="text-white font-inter text-center lg:text-[24px] md:text-[12px]">Направления работ</span>
                </div>
                <div class="about-goals-num flex flex-1 flex-col grow items-center sm:gap-[14px] min-[320px]:gap-[0px]">
                    <x-h1-gradient class="text-[200px] lg:text-[200px] min-[320px]:text-8xl font-bold">25</x-h1-gradient>
                    <span class="text-white font-inter text-center lg:text-[24px] md:text-[12px]">Постоянных клиентов</span>
                </div>
            </div>
        </section>
        <section class="flex flex-col sm:gap-[48px] min-[320px]:gap-[32px] w-[100%] font-inter">
            <x-h1-white>НАШИ РАБОТЫ</x-h1-white>
            
        </section> 

        <section class="flex flex-col sm:gap-[48px] min-[320px]:gap-[32px] font-victor w-[100%]">
            <x-h1-white>ПОЧЕМУ ВЫБИРАЮТ НАС</x-h1-white>
           <div class="swiper SwiperWelcome w-[100%]">
            <div class="swiper-wrapper flex flex-row gap-[14px] w-[100%]">
                <div class="swiper-slide flex justify-center items-center shrink-0 outline-[1,5px] sm:rounded-[28px] min-[320px]:rounded-[12px] w-[426px] sm:min-w-[426px] min-[320px]:min-w-[184px] h-[365px] sm:h-[365px] min-[320px]:h-[158px] bg-gradient p-[63px]">
                    <p class="text-[32px] sm:text-[32px] min-[320px]:text-[12px] text-white">ТЕСТИРОВАНИЕ ВАШЕГО САЙТА ЗА 1 ДЕНЬ С УЧАСТИЕМ >500 ЧЕЛОВЕК</p>
                </div>
                <div class="swiper-slide flex justify-center items-center shrink-0 outline-[1,5px] sm:rounded-[170px] min-[320px]:rounded-[70px] w-[426px] sm:min-w-[426px] min-[320px]:min-w-[184px] h-[365px] sm:h-[365px] min-[320px]:h-[158px] bg-white p-[52px]">
                    <p class="text-[28px] sm:text-[28px] min-[320px]:text-[12px]">ЭФФЕКТИВНОЕ РЕШЕНИЕ ВАШИХ ЗАДАЧ БЛАГОДАРЯ РАБОТЕ БОЛЬШОЙ КОМАНДЫ</p>
                </div>
                <div class="swiper-slide flex justify-center items-center shrink-0 outline-[1,5px] sm:rounded-[28px] min-[320px]:rounded-[12px] w-[426px] sm:min-w-[426px] min-[320px]:min-w-[184px] h-[365px] sm:h-[365px] min-[320px]:h-[158px] bg-gradient clip-sloped-25 px-[55px]">
                    <p class="text-[32px] sm:text-[32px] min-[320px]:text-[12px] text-white">ПРОЗРАЧНЫЕ СРОКИ И ПРОЦЕССЫ</p>
                </div>
                <div class="swiper-slide flex justify-center items-center shrink-0 outline-[1,5px] sm:rounded-[170px] min-[320px]:rounded-[70px] w-[426px] sm:min-w-[426px] min-[320px]:min-w-[184px] h-[365px] sm:h-[365px] min-[320px]:h-[158px] bg-white p-[52px]">
                    <p class="text-[28px] sm:text-[28px] min-[320px]:text-[12px]">ОПЫТ В РАЗНЫХ ОТРАСЛЯХ: EDTECH, РИТЕЙЛ, МЕДИЦИНА, КУЛЬТУРА</p>
                </div>
                <div class="swiper-slide flex justify-center items-center shrink-0 outline-[1,5px] sm:rounded-[28px] min-[320px]:rounded-[12px] w-[426px] sm:min-w-[426px] min-[320px]:min-w-[184px] h-[365px] sm:h-[365px] min-[320px]:h-[158px] bg-gradient p-[63px]">
                    <p class="text-[32px] sm:text-[32px] min-[320px]:text-[12px] text-white">ГЛУБОКАЯ UX-ЭКСПЕРТИЗА</p>
                </div>
            </div>
        </div>
        </section>
        <section class="flex flex-col sm:gap-[48px] min-[320px]:gap-[32px] w-[100%] font-inter">
            <x-h1-white>НАШИ ПАРТНЕРЫ</x-h1-white>
            <div class="swiper SwiperWelcomepartners w-[100%]">
                <div class="swiper-wrapper flex flex-row grow gap-[8px] w-[100%]">
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px]  rounded-[10px]" src="{{ Vite::asset('resources/images/content/logo/chelbasket-logo.jpg') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px] ">Баскетбольный клуб «Челбаскет»</p>
                    </div>
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px] rounded-[10px]" src="{{ Vite::asset('resources/images/content/logo/mini-app-logo.jpg') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px]">Платформа VK mini-apps</p>
                    </div>
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px] rounded-[10px]" src="{{ Vite::asset('resources/images/content/logo/ugmk-logo.jpg') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px]">Технический универвитет УГМК</p>
                    </div>
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px] rounded-[10px]" src="{{ Vite::asset('resources/images/content/logo/logo_polistroy.jpg') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px]">Торговый дом «Полистрой»</p>
                    </div>
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px] rounded-[10px]" src="{{ Vite::asset('resources/images/content/logo/logo_programlab.jpg') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px]">Компания по разработке ПО «ПрограмЛаб»</p>
                    </div>
                    <div class="swiper-slide flex flex-1 flex-col grow sm:gap-[20px] min-[320px]:gap-[12px]">
                        <img class="min-w-[126px] rounded-[10px]" src="{{ Vite::asset('resources/images/content/logo/etalon-logo.jpg') }}" alt="">
                        <p class="text-white font-inter md:text-[15px] min-[320px]:text-[12px]">Носочная фабрика «Эталон»</p>
                    </div>
                </div> 
            </div>
        </section>
        <section class="flex lg:flex-row min-[320px]:flex-col sm:gap-[48px] min-[320px]:gap-[32px] w-[100%] place-content-between">
            <x-h1-white>ОТЗЫВЫ КЛИЕНТОВ</x-h1-white>
            <div class="flex flex-col gap-[20px]">
                <div class="flex justify-center items-center border border-white outline-[1,5px] md:rounded-[28px] min-[320px]:rounded-[20px] text-inter max-w-[774px] lg:p-[60px] sm:p-[50px] min-[320px]:p-[20px] lg:gap-[80px] lg:gap-[30px] min-[320px]:gap-[20px] min-[320px]:flex-col sm:flex-row">
                    <div class="flex flex-col items-center lg:gap-[30px] min-[320px]:gap-[15px] size-auto">
                      <img src="{{ Vite::asset('resources/images/chelbasket_logo.png') }}" alt="Логотип Челбаскет" class="min-[320px]:w-[100px] lg:w-[180px] rounded-full">   
                      <div class="flex flex-col lg:gap-[20px] min-[320px]:gap-[10px] justify-center">
                        <p class="text-white md:text-[20px] min-[320px]:text-[15px] font-semibold text-center">Представитель БК «Челбаскет»</p>
                        <p class="text-white md:text-[15px] min-[320px]:text-[12px] text-center md:w-[174px] sm:w-[150px] min-[440px]:w-[100%] min-[320px]:w-[138px]"></p>
                      </div>
              
                    </div>
                    <div class="flex flex-col lg:gap-[30px] min-[320px]:gap-[15px]">
                      <img class="max-w-[27px]" src="{{ Vite::asset('resources/images/quotation-marks.svg') }}" alt="">
                      <p class="text-white md:text-[18px] min-[320px]:text-[12px]">
                        Проект по исследованию и прототипированию сайта выполнен на уровне профессионального агентства: студенты продемонстрировали глубокое понимание задач, креативность и умение работать с требованиями заказчика.
                      </p>
                    </div>
                </div>
                <div class="flex justify-center items-center border border-white outline-[1,5px] md:rounded-[28px] min-[320px]:rounded-[20px] text-inter max-w-[774px] lg:p-[60px] sm:p-[50px] min-[320px]:p-[20px] lg:gap-[80px] lg:gap-[30px] min-[320px]:gap-[20px] min-[320px]:flex-col sm:flex-row">
                    <div class="flex flex-col items-center lg:gap-[30px] min-[320px]:gap-[15px] size-auto">
                      <img src="{{ Vite::asset('resources/images/barger_logo.png') }}" alt="Влад Зелинский" class="min-[320px]:w-[100px] lg:w-[180px] rounded-full">   
                      <div class="flex flex-col lg:gap-[20px] min-[320px]:gap-[10px] justify-center">
                        <p class="text-white md:text-[20px] min-[320px]:text-[15px] font-semibold text-center">Заказчик проекта «Barger»</p>
                        <p class="text-white md:text-[15px] min-[320px]:text-[12px] text-center md:w-[174px] sm:w-[150px] min-[440px]:w-[100%] min-[320px]:w-[138px]"></p>
                      </div>
              
                    </div>
                    <div class="flex flex-col lg:gap-[30px] min-[320px]:gap-[15px]">
                      <img class="max-w-[27px]" src="{{ Vite::asset('resources/images/quotation-marks.svg') }}" alt="">
                      <p class="text-white md:text-[18px] min-[320px]:text-[12px]">
                        Команда проявила высокий уровень самоорганизованости: качественно проработали проект, быстро взяли задачи в работу, разработали дизайн и фронт. Это говорит о наличии у студентов «осознанных» аналитических и профессиональных компетенций.
                      </p>
                    </div>
                </div>
            </div>
        </section>
<<<<<<< HEAD
        <x-form-order></x-form-order>
=======
<<<<<<< HEAD
        <x-FAQ></x-FAQ>
        <x-form-order></x-form-order>  
        
=======
        <x-form-order ></x-form-order>
>>>>>>> 7f8a80389575e6e7db44471c547c07d62da80251
        <section class="about-form grid grid-cols-2 font-inter w-[100%] font-inter">
            
        </section>
>>>>>>> 4d3f37f7576ea61ebb27bd9f2c22e0d2fa079d0f

    </container>


</x-app-layout>
