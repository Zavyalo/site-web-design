<x-app-layout>

    <container class="flex flex-col gap-[72px] lg:gap-[144px] container mx-auto text-white flex-grow px-4 sm:px-6 lg:px-8">
        <x-h1-gradient>БЛОГ</x-h1-gradient>

        <section class="flex flex-col gap-[32px] font-inter">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] sm:gap-[24px]">
                @for($i=0; $i < 12; $i++) 
                    <x-card></x-card>
                @endfor
            </div>
            <div class="case-pagination">
                <div class="flex items-center justify-center gap-x-[6px] sm:gap-x-[8px] flex-wrap">
                    <button class="w-9 h-9 flex items-center justify-center rounded-full bg-white text-black hover:opacity-80 transition">
                        &larr;
                    </button>
                    <button class="w-9 h-9 flex items-center justify-center rounded-full bg-black text-white text-sm font-medium transition">
                        1
                    </button>
                    @for($i = 2; $i <= 5; $i++)
                    <button class="w-9 h-9 flex items-center justify-center rounded-full border border-white text-white text-sm hover:bg-white hover:text-black transition">
                        {{ $i }}
                    </button>
                    @endfor
                    <button class="w-9 h-9 flex items-center justify-center rounded-full bg-white text-black hover:opacity-80 transition">
                        &rarr;
                    </button>
                </div>
            </div>
        </section>

        <section class="about-form grid grid-cols-1 lg:grid-cols-2 text-white mt-20 mb-20 font-inter gap-8 sm:gap-12">
            <div class="about-form-text-wrapper flex flex-col gap-[20px]">
                <h1 class="text-2xl sm:text-4xl lg:text-6xl font-bold font-victor leading-tight max-w-full">
                    ПОДПИШИТЕСЬ НА РАССЫЛКУ
                </h1>
                <p class="text-sm sm:text-base">Будьте в курсе наших новостей, проектов и новых цифровых решений</p>
            </div>
            <fieldset class="about-form-input flex flex-col gap-[24px]">
                <input class="border-none p-3 sm:p-4 rounded-[100px] text-black text-sm sm:text-base" type="tel" name="form-telephone" placeholder="E-mail" required>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-start">
                    <div class="text-xs sm:text-sm">
                        <input type="checkbox" name="" id="submit-agreement">
                        <label for="submit-agreement">
                            Нажимая на кнопку, я соглашаюсь с&nbsp;
                            <a class="underline" href="#">обработкой персональных данных</a>
                        </label>
                    </div>
                    <button class="form-submit bg-gradient p-3 sm:p-4 font-medium text-white rounded-[100px] text-sm sm:text-base">
                        Оставить заявку
                    </button>
                </div>
            </fieldset>
        </section>
    </container>

</x-app-layout>