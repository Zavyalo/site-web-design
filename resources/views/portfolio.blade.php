<x-app-layout>

    <section class="flex flex-col gap-[48px] md:gap-[144px] pb-[144px]">


        <section class="flex flex-col gap-6">
                <x-h1-gradient>Наши работы</x-h1-gradient>
            <p class="w-full md:w-[70%] text-base md:text-xl lg:text-2xl text-white font-inter">
                В этом разделе мы собрали кейсы, демонстрирующие подход мастерской к решению цифровых задач. От первых
                исследований до запуска продукта — мы сопровождаем проект на каждом этапе, опираясь на цели клиента и
                пользовательский опыт
            </p>
        </section>

        <section class="portfolio-cases flex flex-col gap-[36px] font-inter">

            <div class="w-full overflow-x-auto scrollbar-hide">
                <div class="flex items-start bg-white p-1.5 rounded-full gap-x-[8px] self-start w-max">
                  
                  <input type="radio" id="all" name="category" class="peer hidden" checked />
                  <label for="all"
                    class="px-4 py-2 rounded-full cursor-pointer peer-checked:bg-black peer-checked:text-white text-black hover:bg-black/10 transition whitespace-nowrap">
                    <p class="font-bold text-xs">Все проекты</p>
                  </label>
              
                  @foreach ($tags as $tag)
                    <input type="radio" id="tag-{{ $tag->id }}" name="category" class="peer hidden" />
                    <label for="tag-{{ $tag->id }}"
                      class="px-4 py-2 rounded-full cursor-pointer text-black hover:bg-black/10 transition whitespace-nowrap">
                      <p class="text-xs">{{ $tag->name }}</p>
                    </label>
                  @endforeach
              
                </div>
              </div>




            <div class="case-about flex flex-col gap-[20px]">
                @foreach ($works as $work)
                    <div
                        class="w-full gap-[24px] lg:max-w-none bg-black rounded-[40px] border-2 border-white p-[15px] md:p-[20px] lg:p-8 flex flex-col-reverse md:flex-row items-start justify-between text-white">

                        <div class="flex flex-col justify-between lg:w-[50%] w-full h-auto lg:h-[400px] md:h-[350px]">

                            <div class="flex flex-col gap-[24px] md:gap-[40px]">
                                <div class="flex flex-row gap-2">

                                    @foreach ($work->tags as $tag)
                                        <x-tag>{{ $tag->name }}</x-tag>
                                    @endforeach

                                </div>
                                <div class="flex flex-col gap-[16px] md:gap-[10px]"> 
                                    <h2 class="text-base xl:text-2xl lg:text-xl font-semibold">{{ $work->name }}</h2>
                                <p class="text-sm xl:text-xl lg:text-base text-white">{{ $work->description }}</p>
                                </div>

                                <p class="text-xs xl:text-lg lg:text-sm text-lightgray mb-4">
                                    {{ \Carbon\Carbon::parse($work->date)->translatedFormat('d.m.Y') }}</p>
                            </div>

                            <x-secondary-link href="{{route('case-show', $work->id)}}">Подробнее о
                                кейсе</x-secondary-link>
                        </div>


                        <div class="w-full lg:w-auto max-h-[400px] h-[200px] sm:h-[300px] lg:h-[400px] md:h-[350px] overflow-hidden flex items-center">
                            @php
                               
                            @endphp
                            <img src="{{ Vite::asset($work->getImageUrlAttribute()) }}" alt="Челбаскет кейс"
                                class="h-full w-full lg:w-auto max-w-none object-cover rounded-[28px]">
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="case-pagination">
                <div class="flex items-center justify-center gap-x-[8px]">
                    {{ $works->links() }}
                </div>
            </div>


        </section>

        <x-form-order></x-form-order>

    </section>
</x-app-layout>
