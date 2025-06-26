<x-app-layout>
    <section class="flex flex-col mt-space-48 md:mt-space-144">
        <div class="flex flex-col">
            <div class="flex flex-row ">
                <div class="basis-4/6">
                    <x-h1-gradient class="leadind-[86px] md:leading-[86px]">
                        {{$work->name}}
                    </x-h1-gradient>
                </div>
                <div class="basis-2/6 flex-auto hidden lg:block">
                    <ul class="flex flex-row justify-end gap-3.5">
                        @foreach ($work->tags as $tag)
                        <li class="">
                            <x-tag>{{ $tag->name }}</x-tag>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="flex flex-col mt-space-24">
                <p class="w-12/12 md:w-8/12 font-inter text-base md:text-2xl text-white">{{$work->description}}</p>
                <p class="text-base text-lightgray font-inter mt-space-20">{{ \Carbon\Carbon::parse($work->date)->translatedFormat('d.m.Y') }}</p>
            </div>
        </div>
        <div class="flex justify-center mt-space-48 md:mt-space-144">
            <img class="object-fill flex-grow" src="{{ Vite::asset('resources/images/behance.png') }}" alt="">
        </div>

        <div class="flex flex-col md:flex-row justify-between mt-space-48 md:mt-space-144">
            <x-h1-white class="w-[269px] leading-[86px] mb-space-32 md:mb-space-0">Отзыв клиента</x-h1-white>
            <x-cardtwo></x-cardtwo>
        </div>
        <div class="mt-space-48 mb-space-48 md:mt-space-144 md:mb-space-144">
            <x-form-order></x-form-order>
        </div>
    </section>
</x-app-layout>