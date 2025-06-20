<x-app-layout>
        
       <section class="flex flex-col gap-[144px]">

    <section class="portfolio-heading flex flex-col gap-[24px]">
        <h1 class="text-7xl">Наши работы</h1>
        <p class="w-[860px] text-2xl"> В этом разделе мы собрали кейсы, демонстрирующие подход мастерской к решению цифровых задач. От первых исследований
        до запуска продукта — мы сопровождаем проект на каждом этапе, опираясь на цели клиента и пользовательский опыт</p>
    </section>

    <section class="portfolio-cases flex flex-col gap-[36px]">
        
        <div class="flex items-start bg-white p-1.5 rounded-full w-[472px] gap-x-[8px]">

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



  
        <div class="case-about"></div>
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