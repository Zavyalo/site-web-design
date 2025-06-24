<x-app-layout>

    <section class="flex flex-col gap-[48px] md:gap-[144px] py-[144px]">


        <section class="flex flex-col gap-6">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-victor bg-gradient bg-clip-text text-transparent">
                Наши работы
            </h1>
            <p class="w-full md:w-[70%] text-base md:text-xl lg:text-2xl text-white font-inter">
                В этом разделе мы собрали кейсы, демонстрирующие подход мастерской к решению цифровых задач. От первых
                исследований до запуска продукта — мы сопровождаем проект на каждом этапе, опираясь на цели клиента и
                пользовательский опыт
            </p>
        </section>

        <section class="portfolio-cases flex flex-col gap-[36px] font-inter">

            <div class="flex items-start bg-white p-1.5 rounded-full gap-x-[8px] self-start">

                <input type="radio" id="all" name="category" class="peer hidden" checked />
                <label for="all"
                    class="px-4 py-2 rounded-full cursor-pointer peer-checked:bg-black peer-checked:text-white text-black hover:bg-black/10 transition">
                    <p class="font-bold text-xs">Все проекты</p>
                </label>


                @foreach ($tags as $tag)
                    <input type="radio" id="research" name="category" class="peer hidden" />
                    <label for="research"
                        class="px-4 py-2 rounded-full cursor-pointer text-black hover:bg-black/10 transition">
                        <p class="text-xs">{{ $tag->name }}</p>
                    </label>
                @endforeach


            </div>




            <div class="case-about flex flex-col gap-[20px]">
                @foreach ($works as $work)
                    <div
                        class="w-full bg-black rounded-[40px] border-2 border-white p-8 flex flex-col md:flex-row items-start justify-between gap-6 text-white">

                        <div class="flex flex-col justify-between h-full">

                            <div class="gap-[40px] flex-col">
                                <div class="flex gap-2 pb-[40px]">

                                    @foreach ($work->tags as $tag)
                                        <x-tag>{{ $tag->name }}</x-tag>
                                    @endforeach

                                </div>
                                <h2 class="text-2xl font-semibold pb-[16px]">{{ $work->name }}</h2>
                                <p class="text-xl text-white pb-[40px]">{{ $work->description }}</p>
                                <p class="text-lg text-lightgray mb-4">
                                    {{ \Carbon\Carbon::parse($work->date)->translatedFormat('d.m.Y') }}</p>
                            </div>

                            <x-secondary-link href="{{route('case-show', $work->id)}}">Подробнее о
                                кейсе</x-secondary-link>
                        </div>


                        <div>
                            @php
                                $imagePath = 'resources/images/' . $work->path_img;
                            @endphp
                            <img src="{{ Vite::asset($imagePath) }}" alt="Челбаскет кейс"
                                class="rounded-[28px] max-h-[400px] object-cover">
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="case-pagination">
                <div class="flex items-center justify-center gap-x-[8px]">

                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-full bg-white text-black hover:opacity-80 transition">
                        &larr;
                    </button>


                    <button
                        class="w-9 h-9 flex items-center justify-center bg-gradient rounded-full bg-black text-white text-sm font-medium transition">
                        1
                    </button>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-full border border-white text-white text-sm hover:bg-white hover:text-black transition">
                        2
                    </button>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-full border border-white text-white text-sm hover:bg-white hover:text-black transition">
                        3
                    </button>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-full border border-white text-white text-sm hover:bg-white hover:text-black transition">
                        4
                    </button>
                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-full border border-white text-white text-sm hover:bg-white hover:text-black transition">
                        5
                    </button>


                    <button
                        class="w-9 h-9 flex items-center justify-center rounded-full bg-white text-black hover:opacity-80 transition">
                        &rarr;
                    </button>
                </div>
            </div>


        </section>

        <section class="about-form grid grid-cols-2 text-white font-inter">
            <div class="about-form-text-wrapper flex flex-col gap-[26px]">
                <h1 class="text-6xl font-bold font-victor">СВЯЖИТЕСЬ С НАМИ</h1>
                <p>Оставьте заявку и мы свяжемся с вами или позвоните по номеру:</p>
                <a class="text-3xl font-bold " href="#">+7 999 123-45-67</a>
            </div>
            <fieldset class="about-form-input flex flex-col gap-y-[14px]">
                <div class="flex gap-[14px]">
                    <input class="flex grow border-none p-4 rounded-[100px]" type="text" name="form-name"
                        id="" placeholder="Имя" required>
                    <input class="flex grow border-none p-4 rounded-[100px]" type="email" name="form-email"
                        id="" placeholder="E-mail" required>
                </div>
                <input class="border-none p-4 rounded-[100px]" type="tel" name="form-telephone" id=""
                    placeholder="Телефон" required>
                <textarea class="border-none p-4 rounded-3xl" type="text" name="form-text" id="" placeholder="Комментарий"></textarea>
                <div class="grid grid-cols-2">
                    <div>
                        <input type="checkbox" name="" id="submit-agreement">
                        <label for="submit-agreement">Нажимая на кнопку, я соглашаюсь с&nbsp<a class="underline"
                                href="#">обработкой персональных данных</a></label>
                    </div>
                    <button class="form-submit bg-gradient p-4 font-medium text-white rounded-[100px]">Оставить
                        заявку</button>
                </div>
            </fieldset>
        </section>


    </section>
</x-app-layout>
