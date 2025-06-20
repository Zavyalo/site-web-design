<x-app-layout>
    <section class="flex flex-col gap-36 mt-36 container">
        <div class="flex flex-col gap-6">
            <div class="flex flex-row">
                <div class="basis-4/6">
                    <h1 class="uppercase">
                        Название кейса
                    </h1>
                </div>
                <div class="basis-2/6 flex-auto ">
                    <ul class="flex flex-row justify-end gap-3.5">
                        <li class="">Исследования</li>
                        <li class="">Веб-дизайн</li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col gap-5">
                <p class="max-w-prose">В этом разделе мы собрали кейсы, демонстрирующие подход мастерской к решению цифровых задач. От первых исследований
                    до запуска продукта — мы сопровождаем проект на каждом этапе, опираясь на цели клиента и пользовательский опыт</p>
                <p>01.03.2025</p>
            </div>
        </div>
        <div class="flex justify-center">
            <img class="object-fill flex-grow" src="{{ Vite::asset('resources/images/behance.png') }}" alt="">
        </div>
    </section>

    <section class="partner">
        <h1 class="uppercase">
            Наши партнёры
        </h1>
        <div class="flex flex-row gap-2.5 mt-12">
            <div class="flex flex-col w-52 gap-5">
                <img class="" src="{{ Vite::asset('resources/images/part-aero.png') }}" alt="">
                <p>Платформа развлечений на борту ПАО «Аэрофлот»</p>
            </div>
            <div class="flex flex-col w-52 gap-5">
                <img class="" src="{{ Vite::asset('resources/images/part-ugmk.png') }}" alt="">
                <p>3D-тренажер для УГМК</p>
            </div>
            <div class="flex flex-col w-52 gap-5">
                <img class="" src="{{ Vite::asset('resources/images/part-uni.png') }}" alt="">
                <p>«Умная обувь»: прототип обуви будущего</p>
            </div>
            <div class="flex flex-col w-52 gap-5">
                <img class="" src="{{ Vite::asset('resources/images/part-mus.png') }}" alt="">
                <p>Виртуальный атлас-тренажер для ООО «ПрограмЛаб»</p>
            </div>
            <div class="flex flex-col w-52 gap-5">
                <img class="" src="{{ Vite::asset('resources/images/part-hyatt.png') }}" alt="">
                <p>Business case for human resources management</p>
            </div>
            <div class="flex flex-col w-52 gap-5">
                <img class="" src="{{ Vite::asset('resources/images/part-bank.png') }}" alt="">
                <p>Выявление актуальных схем финансового мошенничества</p>
            </div>
        </div>
    </section>
</x-app-layout>