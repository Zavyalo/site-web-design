<section class="flex flex-row justify-between w-full font-inter text-white">
    <x-h1-white>ВОПРОСЫ <br> И ОТВЕТЫ</x-h1-white>
    <div class="flex flex-col w-[1000px] gap-space-32">
        <div class="faq-item pb-space-20">
        <div class="faq-question flex flex-row justify-between" onclick="toggleAnswer(this)">
            <p class="">Как мы передаём сайт клиенту?</p>
            <div class="" id="">⮧</div>
        </div>
        <div class="faq-answer pt-space-20">Мы переносим готовый сайт в ваш аккаунт на Tilda, а также предоставляем инструкции по управлению сайтом.</div>
        </div>
        <div class="faq-item pb-space-20">
        <div class="faq-question flex flex-row justify-between" onclick="toggleAnswer(this)">
            <p class="">Можно ли потом редактировать сайт самому?</p>
            <div class="" id="">⮧</div>
        </div>
        <div class="faq-answer pt-space-20">Да, вы сможете самостоятельно редактировать сайт через редактор Tilda. Для этого нужно войти, выбрать нужный проект и перейти в режим редактирования. Вы сможете менять тексты, изображения, добавлять новые блоки, корректировать дизайн и структуру страниц. Мы предоставим инструкции и, при необходимости, проведём обучение.</div>
        </div>
        <div class="faq-item pb-space-20">
        <div class="faq-question flex flex-row justify-between" onclick="toggleAnswer(this)">
            <p class="">Какие этапы включает процесс разработки цифрового продукта?</p>
            <div class="" id="">⮧</div>
        </div>
        <div class="faq-answer pt-space-20">
            <ul> 
                <li>1. Исследование и аналитика</li>
                <li>2. Проектирование и дизайн</li>
                <li>3. Верстка на Tilda</li>
            </ul>
        </div>
        </div>
        <div class="faq-item pb-space-20">
        <div class="faq-question flex flex-row justify-between" onclick="toggleAnswer(this)">
            <p class="">Предоставляете ли вы услуги по аудиту сайта?</p>
            <div class="" id="">⮧</div>
        </div>
        <div class="faq-answer pt-space-20">Да, мы проводим аудит сайтов. В рамках аудита мы анализируем дизайн, структуру, юзабилити, технические параметры и показатели эффективности сайта. По результатам мы предоставляем подробный отчёт с рекомендациями по улучшению.</div>
    </div>
</div>
</section>


<script>
function toggleAnswer(question) {
    var answer = question.nextElementSibling;
    answer.classList.toggle("show");
}
</script>