<x-app-layout>
    <section class="flex flex-col gap-36 mt-36 container">
        <div class="flex flex-col gap-6">
            <div class="flex flex-row">
                <div class="basis-4/6">
                    <h1 class="uppercase text-6xl">
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
                <p class="w-8/12 text-2xl">В этом разделе мы собрали кейсы, демонстрирующие подход мастерской к решению цифровых задач. От первых исследований
                    до запуска продукта — мы сопровождаем проект на каждом этапе, опираясь на цели клиента и пользовательский опыт</p>
                <p class="text-base">01.03.2025</p>
            </div>
        </div>
        <div class="flex justify-center">
            <img class="object-fill flex-grow" src="{{ Vite::asset('resources/images/behance.png') }}" alt="">
        </div>
        
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
    </section>

    <section class="partners">
        <h1 class="uppercase text-6xl">
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