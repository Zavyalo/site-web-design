@session('info')
<div class="fixed top-[90px] z-10 w-full l-0 notice">
    <div class="flex bg-gradient flex-row gap-3 justify-center px-[15px] py-space-10 w-full">
        <img class="" src="{{ Vite::asset('resources/images/icon-checkmark.svg') }}" alt="Успешно">
        <p class="text-white font-semibold font-inter leading-5">{{$value}}</p>
    </div>
</div>
@endsession