<x-app-layout>

    <container class="flex flex-col sm:gap-[144px] min-[320px]:gap-[48px] container mx-auto text-white flex-grow px-4 sm:px-6 lg:px-8 my-[144px]">
        <x-h1-gradient>БЛОГ</x-h1-gradient>
        <section class="flex flex-col sm:gap-[48px] min-[320px]:gap-[32px] font-inter">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] sm:gap-[24px]">
                @foreach ($articles as $article)

                <a href="{{$article->link}}">
                    <div class="border-2 border-white rounded-[20px] sm:rounded-[40px] p-[20px] text-white font-inter">

                        <div class="rounded-[20px] sm:rounded-[30px]">
                            <img src="{{ Vite::asset($article->getImageUrlAttribute()) }}" alt="preview" class="card-image w-full aspect-[4/3] object-cover rounded-[20px] sm:rounded-[30px] mx-auto">
                        </div>

                        <div class="flex items-center mt-[16px] mb-[16px]">
                            <div>
                                <span class="time text-xs text-white">{{ \Carbon\Carbon::parse($article->date)->translatedFormat('d.m.Y') }}</span>
                            </div>
                        </div>

                        <h2 class="truncate title text-[18px] font-bold leading-tight mb-[8px]">
                            {{$article->name}}
                        </h2>

                        <p class="truncate description text-[14px] leading-[20px] text-white mb-[12px]">
                            {{$article->description}}
                        </p>

                        <div class="tags text-[14px] text-white space-x-3">

                            @foreach ($article->hashtags as $tag)
                            <span>#{{ $tag->name }}</span>
                            @endforeach

                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="case-pagination">
                <div class="flex items-center justify-center gap-x-[8px]">
                    {{ $articles->links() }}
                </div>
            </div>
        </section>

        <section class="about-form grid grid-cols-1 lg:grid-cols-2 text-white mt-20 mb-20 font-inter gap-8 sm:gap-12 items-center">
            <div class="about-form-text-wrapper flex flex-col gap-[20px]">
                <h1 class="text-6xl font-bold font-victor leading-tight max-w-full  text-white px-4 py-2 w-fit">
                    ПОДПИШИТЕСЬ НА РАССЫЛКУ
                </h1>
                <p class="text-sm sm:text-base px-4">
                    Будьте в курсе наших новостей, проектов и новых цифровых решений
                </p>
            </div>

            <!-- Форма подписки -->
            <form action="{{ route('subscribe.create') }}" method="POST">
                @csrf
                @method('put')
                <input type="check" id="check" name="check" class="hidden">

                <fieldset class="about-form-input flex flex-col gap-[24px]">
                    <input class="border-none p-3 sm:p-4 rounded-[100px] text-black text-sm sm:text-base" type="email" name="email" placeholder="E-mail" required>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-start">
                        <div class="text-xs sm:text-sm">
                            <input type="checkbox" id="submit-agreement" name="agreement" required>
                            <label for="submit-agreement">
                                Нажимая на кнопку, я соглашаюсь с&nbsp;
                                <a class="underline" href="#">обработкой персональных данных</a>
                            </label>
                        </div>

                        <button type="submit" class="form-submit bg-gradient p-3 sm:p-4 font-medium text-white rounded-[100px] text-sm sm:text-base">
                            Оставить заявку
                        </button>
                    </div>
                </fieldset>
            </form>
        </section>
    </container>

</x-app-layout>