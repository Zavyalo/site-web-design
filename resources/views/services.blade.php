<x-app-layout>
    <h1 class="text-[64px] mb-[144px] text-orange-600">Наши услуги</h1>
        <div class="mb-[144px]">
            создаем цифровые продукты с нуля
            проводим исследования
            проектируем интерфейсы
            разрабатываем сайты на tilda
            создаем vr-решения
        </div>

    <div class="flex-col justify-between" >
        <div class="flex flex-row mb-[48px]">
            <h2 class="text-[28px] text-red-500">(01)</h2>
            <h2 class="text-[28px] text-white"> Исследования и гипотезы</h2>
        </div>
        <div class="mb-[48px]">
            <p class="text-lightgray pb-[14px]">Кому подходит: стартапы, компании с новым продуктом</p>
            <p class="text-lightgray">Методы: user-flow, сценарии, pain points, CJM</p>
        </div>
        <div class="flex flex-row justify-between">
        <div class="flex flex-col justify-between">   
            <div class="flex flex-row">
                <div class="pr-[78px]">
                    <p class="text-white text-[16px] font-semibold pb-[14px]">Что делаем:</p>
                    <ul class="text-white text-[16px] font-normal">
                        <li>> Интервью с пользователями</li>
                        <li>> Анализ конкурентов</li>
                        <li>> Карты CJM</li>
                        <li>> A/B-тесты и быстрые MVP</li>
                        <li>> Поведенческая аналитика</li>
                    </ul>
                </div>
                <div>
                    <p class="text-white text-[16px] font-semibold pb-[14px]">Что получает клиент:</p>
                    <ul class="text-white text-[16px] font-normal">
                        <li>> Чёткие выводы и инсайты</li>
                        <li>> Верифицированные гипотезы</li>
                        <li>> Конкретные рекомендации и приоритеты для запуска</li>
                    </ul>
                </div>
            </div>
                <span>От 18 000</span>
            </div>
        </div>
        <img src="{{ Vite::asset('resources/images/serves_1.png') }}" alt="" class="shrink">
    </div>


</x-app-layout>