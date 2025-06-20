<x-app-layout>
        
       <section class="flex flex-col gap-[144px]">

    <section class="portfolio-heading flex flex-col gap-[24px]">
        <h1 class="text-7xl bg-gradient bg-clip-text text-transparent">Наши работы</h1>
        <p class="w-[860px] text-2xl"> В этом разделе мы собрали кейсы, демонстрирующие подход мастерской к решению цифровых задач. От первых исследований
        до запуска продукта — мы сопровождаем проект на каждом этапе, опираясь на цели клиента и пользовательский опыт</p>
    </section>

    <section class="portfolio-cases flex flex-col gap-[36px]">
        
        <div class="flex items-start bg-white p-1.5 rounded-full gap-x-[8px] self-start">

            <input type="radio" id="all" name="category" class="peer hidden" checked />
            <label for="all" class="px-4 py-2 rounded-full cursor-pointer peer-checked:bg-black peer-checked:text-white text-black hover:bg-black/10 transition">
              <p class="font-bold text-xs">Все проекты</p>
            </label>
          
            <input type="radio" id="research" name="category" class="peer hidden" />
            <label for="research" class="px-4 py-2 rounded-full cursor-pointer text-black hover:bg-black/10 transition">
              <p class="text-xs">Исследования</p>
            </label>
          
            <input type="radio" id="web" name="category" class="peer hidden" />
            <label for="web" class="px-4 py-2 rounded-full cursor-pointer text-black hover:bg-black/10 transition">
              <p class="text-xs">Веб-дизайн</p>
            </label>
          
            <input type="radio" id="vr" name="category" class="peer hidden" />
            <label for="vr" class="px-4 py-2 rounded-full cursor-pointer text-black hover:bg-black/10 transition">
              <p class="text-xs">VR-приложения</p>
            </label>
          
          </div>



  
        <div class="case-about">
          <div class="w-full h-[464px] bg-black rounded-[40px] border-2 border-white p-[32px] flex items-start justify-between gap-6 text-white">

            <div class="flex flex-col justify-between h-full">

              <div class="gap-[40px] flex-col">
                <div class="flex gap-2 pb-[40px]">
                <x-tag>Исследования</x-tag>
                <x-tag>Веб-дизайн</x-tag>
              </div>
              <h2 class="text-2xl pb-[16px]">Сайт баскетбольного клуба «Челбаскет»</h2>
              <p class="text-xl text-white pb-[40px]">Аналитика и редизайн многостраничного сайта</p>
              <p class="text-lg text-lightgray mb-4">01.02.2024</p>
              </div>

              <x-secondary-button class="justify-center h-[56px] w-[231px]">Подробнее о кейсе</x-secondary-button>
            </div>
          

            <div class="flex-shrink-0">
              <img src="{{ Vite::asset('resources/images/content/case1.png') }}" alt="Челбаскет кейс" class="rounded-[28px]">
            </div>
          </div>
        </div>

        <div class="case-pagination">
            <div class="flex items-center justify-center gap-x-[8px]">

                <button class="w-9 h-9 flex items-center justify-center rounded-full bg-white text-black hover:opacity-80 transition">
                  &larr;
                </button>
              

                <button class="w-9 h-9 flex items-center justify-center rounded-full bg-black text-white text-sm font-medium transition">
                  1
                </button>
                <button class="w-9 h-9 flex items-center justify-center rounded-full border border-white text-white text-sm hover:bg-white hover:text-black transition">
                  2
                </button>
                <button class="w-9 h-9 flex items-center justify-center rounded-full border border-white text-white text-sm hover:bg-white hover:text-black transition">
                  3
                </button>
                <button class="w-9 h-9 flex items-center justify-center rounded-full border border-white text-white text-sm hover:bg-white hover:text-black transition">
                  4
                </button>
                <button class="w-9 h-9 flex items-center justify-center rounded-full border border-white text-white text-sm hover:bg-white hover:text-black transition">
                  5
                </button>
              

                <button class="w-9 h-9 flex items-center justify-center rounded-full bg-white text-black hover:opacity-80 transition">
                  &rarr;
                </button>
              </div>
        </div>


    </section>

    <section class="about-form grid grid-cols-2">
      <div class="about-form-text-wrapper flex flex-col gap-[26px]">
          <h1 class="text-6xl font-bold">СВЯЖИТЕСЬ С НАМИ</h1>
          <p>Оставьте заявку и мы свяжемся с вами или позвоните по номеру:</p>
          <a class="text-3xl font-bold" href="#">+7(999)123-45-67</a>
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

    {{-- <section class="feedback-component">
    <div class="feedback-text">
        <h1>Свяжитесь с нами</h1>
    <p>Оставьте заявку и мы свяжемся с Вами или позвоните по номеру:</p>
    <p class="font-bold">+7 (999) 123-45-67</p>
    </div>

    <div class="feedback-form">
        
    </div>
</section> --}}

       </section>
</x-app-layout>