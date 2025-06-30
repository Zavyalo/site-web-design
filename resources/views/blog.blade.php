<x-app-layout>

    <container class="flex flex-col gap-[72px] lg:gap-[144px] container mx-auto text-white flex-grow px-4 sm:px-6 lg:px-8">
        <x-h1-gradient>БЛОГ</x-h1-gradient>

        <section class="flex flex-col gap-[32px] font-inter">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] sm:gap-[24px]">
                @foreach ($articles as $article)
                <div class="border-2 border-white rounded-[40px] p-[20px] text-white font-inter">

                    <div class="rounded-[30px]">
                        <img src="{{ Vite::asset('resources/images/7.jpg') }}" alt="preview"
                            class="card-image w-full aspect-[4/3] object-cover rounded-[30px] mx-auto">
                    </div>
                    <div class="flex items-center mt-[16px] mb-[16px]">
                        <div>
                            <span class="time text-xs text-white">16 часов назад</span>
                        </div>
                    </div>
                    <h2 class="title text-[18px] font-bold leading-tight mb-[8px]">
                        {{$article->name}}
                    </h2>
                    <p class="description text-[14px] leading-[20px] text-white mb-[12px]">
                        Обсуждаем основные принципы работы с цветом и советы по созданию гармоничных сочетаний
                    </p>
                    <div class="tags text-[14px] text-white space-x-3">
                        <span>#UX/UI</span>
                        <span>#дизайн</span>
                        <span>#интерфейсы</span>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="case-pagination">
                <div class="flex items-center justify-center gap-x-[8px]">
                    {{ $articles->links() }}
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
                        <input type="checkbox" name="" id="submit-agreement" name="agreement">
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