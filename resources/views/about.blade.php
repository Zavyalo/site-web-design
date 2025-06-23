<x-app-layout>
<div class="about-page-wrapper flex flex-col gap-[144px] ml-[70px] mr-[70px]">
<section class="about-desc">
    <div class="about-desc-text-wrapper grid grid-cols-2">
        <h1 class="text-white font-victor text-6xl font-bold">О НАС</h1>
        <p class="text-white font-inter">«Цифровые решения» — это мастерская МИДиСа, одного из ведущих образовательных учреждений в области дизайна, сервиса и цифровых технологий.</p>
        <p class="text-white font-inter col-start-2 ">Наша команда объединяет студентов, преподавателей и специалистов, стремящихся создавать современные цифровые продукты: от исследований и прототипов до сайтов и VR-приложений.</p>
    </div>
</section>

<section class="about-mission section-display">
    <h1 class="text-white font-victor text-6xl font-bold">МИССИЯ И ЦЕННОСТИ</h1>
    <div class="about-blob-wrapper grid grid-cols-3 gap-[14px]">
        <!-- row 1 -->
        <div class="bg-white font-inter flex flex-1 rounded-[100px] p-8 items-center justify-center">Упростить сложное</div>
        <div class="bg-gradient font-inter flex flex-1 clip-sloped-25 p-8 items-center justify-center"></div>
        <div class="bg-white font-inter flex flex-1 rounded-xl p-8 items-center justify-center">Всегда работать в интересах клиента</div>
        <!-- row 2 -->
        <div class="bg-gradient font-inter flex flex-1 rounded-[100px] p-8 justify-center"></div>
        <div class="bg-white font-inter flex flex-1 rounded-xl p-8 justify-center">Быть открытыми к экспериментам и технологиям</div>
        <div class="bg-gradient font-inter flex flex-1 rounded-[100px] p-8 justify-center"></div>
        <!-- row 3 -->
        <div class="bg-white font-inter flex flex-1 rounded-xl p-8 justify-center"></div>
        <div class="bg-gradient font-inter flex flex-1 clip-sloped-25 p-8 justify-center"></div>
        <div class="bg-white font-inter flex flex-1 rounded-[100px] p-8 justify-center">Создавать решения, а не просто дизайн</div>
    </div>
</section>

<section class="about-goals section-display">
    <h1 class="text-white font-victor text-6xl font-bold">ДОСТИЖЕНИЯ</h1>
    <div class="about-goals-num-wrapper flex flex-row">
        <div class="about-goals-num flex flex-1 flex-col grow items-center">
            <h2 class="text-white font-victor text-[200px] font-bold">80+</h2>
            <span class="text-white font-inter">Завершённых проектов</span>
        </div>
        <div class="about-goals-num flex flex-1 flex-col grow items-center">
            <h2 class="text-white font-victor text-[200px] font-bold">4</h2>
            <span class="text-white font-inter">Направления работ</span>
        </div>
        <div class="about-goals-num flex flex-1 flex-col grow items-center">
            <h2 class="text-white font-victor text-[200px] font-bold">25</h2>
            <span class="text-white font-inter">Постоянных клиентов</span>
        </div>
    </div>
</section>

<section class="about-experts section-display">
    <div class="about-experts-text-wrapper grid grid-cols-2">
        <h1 class="text-white font-victor text-6xl font-bold">НАШИ СПЕЦИАЛИСТЫ</h1>
        <p class="text-white font-inter">Каждый проект — это синергия UX-аналитиков, дизайнеров, контент-специалистов, верстальщиков и VR-разработчиков. В команде — специалисты с опытом от 3 до 12 лет</p>
    </div>
    <div class="about-experts-photo-wrapper flex flex-row gap-[14px]">
        <div class="bg-white flex flex-1 rounded-xl p-8 items-center justify-center">1</div>
        <div class="bg-white flex flex-1 rounded-[100px] p-8 justify-center">2</div>
        <div class="bg-white flex flex-1 clip-sloped-25 p-8 justify-center">3</div>
        <div class="bg-white flex flex-1 rounded-xl p-8 items-center justify-center">4</div>
        <div class="bg-white flex flex-1 rounded-[100px] p-8 justify-center">5</div>
    </div>
</section>

<section class="about-awards">
    <div class="about-awards-text-wrapper flex flex-row">
        <div class="about-awards-text flex flex-col p-[42px] h-[400px] justify-between grow items-start">
            <h2 class="text-white font-victor text-5xl font-medium">Digital Design Award 2024</h2>
            <span class="text-white font-inter">Участники и финалисты </span>
        </div>
        <div class="about-awards-text flex flex-col p-[42px] h-[400px] justify-between grow items-start">
            <h2 class="text-white font-victor text-5xl font-medium">Tilda Education и VR Days</h2>
            <span class="text-white font-inter">Партнёры конференций</span>
        </div>
        <div class="about-awards-text flex flex-col p-[42px] h-[400px] justify-between grow items-start">
            <h2 class="text-white font-victor text-5xl font-medium">Nielsen  Norman Group</h2>
            <span class="text-white font-inter">Сертификаты по UX </span>
        </div>
    </div>
</section>

<section class="about-faq">
        <h1 class="text-white font-victor text-6xl font-bold">ВОПРОСЫ И ОТВЕТЫ</h1>
</section>

<section class="about-form grid grid-cols-2">
    <div class="about-form-text-wrapper flex flex-col gap-[26px]">
        <h1 class="text-white font-victor text-6xl font-bold">СВЯЖИТЕСЬ С НАМИ</h1>
        <p class="text-white font-inter">Оставьте заявку и мы свяжемся с вами или позвоните по номеру:</p>
        <a class="text-white font-inter text-3xl font-bold" href="#">+7(999)123-45-67</a>
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
        <label for="submit-agreement">Нажимая на кнопку, я соглашаюсь с&nbsp<a class="underline" href="#">обработкой персональных данных</a></label>
        </div>
        <button class="form-submit bg-gradient p-4 font-medium text-white rounded-[100px]">Оставить заявку</button>
    </div>
    </fieldset>
</section>
</div>
</x-app-layout>