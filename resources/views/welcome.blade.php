<x-app-layout>
    <div class="flex flex-col justify-center size-auto gap-[144px] mb-[144px] mt-[144px]">
        <section class="flex flex-col items-center gap-[70px]">
            <div class="flex flex-col justify-center gap-[42px]">
            <p class="text-[74px] font-bold text-white text-center">Создаём цифровые решения, которые работают</p>
            <h1 class="text-white text-[24px] text-center">Образовательный проект МИДиС: от идеи до цифрового продукта. Мы слышим, вникаем и превращаем Ваши задачи в понятные, живые цифровые продукты</h1>
            </div>
            <x-secondary-button class=" flex justify-center w-[311px] h-[56px]">Оставить заявку</x-secondary-button>
        </section>
        <section class="flex flex-col gap-[48px]">
            <h1 class="text-[64px] text-white">НАШИ УСЛУГИ</h1>
            <div class="flex flex-wrap gap-[14px]">
                <div class="w-[866px] h-[413px] bg-white clip-sloped-25 p-[50px] content-end">
                    <h1 class="text-[64px]">исследования и гипотезы</h1>
                </div>
                <div class="border border-white outline-[1,5px] rounded-[28px] w-[426px] h-[413px] p-[50px] content-end">
                    <h1 class="text-[48px]">Создание сайтов на tilda</h1>
                </div>
                <div class="border border-white outline-[1,5px] rounded-[28px] w-[426px] h-[413px] p-[50px] content-end">
                    <h1 class="text-[48px]">Создание приложений с vr-технологиями</h1>
                </div>
                <div class="w-[866px] h-[413px] bg-white clip-sloped-25 p-8 p-[50px] content-end">
                    <h1 class="text-[64px]">Создание прототипов сайта</h1>
                </div>
            </div>
        </section>
        <section class="about-goals section-display">
            <h1 class="text-[64px] text-white">ДОСТИЖЕНИЯ</h1>
            <div class="about-goals-num-wrapper flex flex-row">
                <div class="about-goals-num flex flex-1 flex-col grow items-center">
                    <h2 class="text-[200px] font-bold">80+</h2>
                    <span class="text-white">Завершённых проектов</span>
                </div>
                <div class="about-goals-num flex flex-1 flex-col grow items-center">
                    <h2 class="text-[200px] font-bold">4</h2>
                    <span class="text-white">Направления работ</span>
                </div>
                <div class="about-goals-num flex flex-1 flex-col grow items-center">
                    <h2 class="text-[200px] font-bold">25</h2>
                    <span class="text-white">Постоянных клиентов</span>
                </div>
            </div>
        </section>
        <section class="flex flex-col gap-[48px]">
            <h1 class="text-[64px] text-white">НАШИ РАБОТЫ</h1>
            
        </section> 
        <section class="flex flex-col gap-[48px]">
            <h1 class="text-[64px] text-white">ПОЧЕМУ ВЫБИРАЮТ НАС</h1>
            <div class="flex flex-row gap-[14px]">
                <div class="flex justify-center items-center outline-[1,5px] rounded-[28px] w-[426px] h-[365px] bg-gradient p-[63px]">
                    <h1 class="text-[32px] text-white">Тестирование вашего сайта за 1 день с участием >500 человек</h1>
                </div>
                <div class="flex justify-center items-center outline-[1,5px] rounded-[170px] w-[426px] h-[365px] bg-white p-[52px]">
                    <h1 class="text-[32px]">эффективное решение ваших задач благодаря работе большой команды</h1>
                </div>
                <div class="flex justify-center items-center outline-[1,5px] rounded-[28px] w-[426px] h-[365px] bg-gradient clip-sloped-25 p-[63px]">
                    <h1 class="text-[32px] text-white">Прозрачные сроки и процессы</h1>
                </div>
                <div class="flex justify-center items-center outline-[1,5px] rounded-[170px] w-[426px] h-[365px] bg-white p-[52px]">
                    <h1 class="text-[32px]">Опыт в разных отраслях: EdTech, ритейл, медицина, культура</h1>
                </div>
                <div class="flex justify-center items-center outline-[1,5px] rounded-[28px] w-[426px] h-[365px] bg-gradient p-[63px]">
                    <h1 class="text-[32px] text-white">Глубокая 
                        UX-экспертиза</h1>
                </div>
            </div>
        </section>
        <section class="flex flex-row gap-[48px]">
            <h1 class="text-[64px] text-white">ОТЗЫВЫ КЛИЕНТОВ</h1>
            <div class="flex flex-col">

            </div>
        </section>
        <section class="about-form grid grid-cols-2">
            <div class="about-form-text-wrapper flex flex-col gap-[26px]">
                <h1 class="text-[64px] text-white">СВЯЖИТЕСЬ С НАМИ</h1>
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
    </div>

</x-app-layout>