<div class="about-form grid 
    sm:grid-rows-2
    sm:grid-flow-col
    md:grid-flow-col
    lg:grid-flow-row
    lg:grid-cols-2
    lg:grid-rows-none
    items-start">
    <div class="about-form-text-wrapper flex flex-col
        sm:gap-space-16
        md:gap-space-26">
        <h1 class="text-white font-victor font-bold
            sm:text-3xl 
            sm:row-start-1
            md:text-4xl
            lg:text-5xl"
        >СВЯЖИТЕСЬ С НАМИ</h1>
        <p class="text-white font-inter">Оставьте заявку и мы свяжемся с вами или позвоните по номеру:</p>
        <a class="text-white font-inter text-3xl font-bold mb-0" href="#">+7(999)123-45-67</a>
    </div>
        <form class="form-order flex flex-col gap-y-[14px] w-full" action="{{route('order.create')}}" method="POST">
            @method('put')
            @csrf
        <div class="flex gap-[14px] w-full">
            <input class="caret-rose-600 w-full border-none p-4 rounded-[100px]" 
                type="text" 
                name="name" 
                placeholder="Имя" 
                required>
            <input class="caret-rose-600 w-full border-none p-4 rounded-[100px]" 
                type="email" 
                name="email" 
                placeholder="E-mail" 
                required>
        </div>
        <input class="caret-rose-600 w-full border-none p-4 rounded-[100px]" 
            x-data
            x-mask="+7(999)999-99-99"
            type="tel" 
            name="tel" 
            placeholder="+7(999)999-99-99"
            required>
        <textarea class="caret-rose-600 field-sizing-content border-none p-4 rounded-3xl"
            rows="2" 
            name="message" 
            placeholder="Комментарий"></textarea>
        <input type="checkbox" name="check" id="check" class="hidden">
        <div class="grid grid-cols-2 items-center w-full">
            <div class="flex items-start gap-x-2">
                <label class="text-white font-inter" for="submit-agreement">
                    <input class="accent-rose-600" type="checkbox" id="submit-agreement">
                    Нажимая на кнопку, я соглашаюсь с&nbsp;<a class="underline" href="#">обработкой персональных данных</a>
                </label>
            </div>
            <x-secondary-button type="submit">Оставить заявку</x-secondary-button>
        </div>
    </form>
</div>