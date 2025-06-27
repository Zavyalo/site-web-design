<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="">
        @csrf

        <!-- Email Address -->
        <div>
            <!-- <x-input-label for="email" :value="__('Логин')" /> -->
            <x-text-input placeholder="Логин" id="email" class="block w-full bg-field font-inter text-darkgray px-space-24 py-space-10 text-base" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="">
            <!-- <x-input-label for="password" :value="__('Пароль')" /> -->

            <x-text-input placeholder="Пароль" id="password" class="block mt-space-32 w-full bg-field font-inter text-darkgray px-space-24 py-space-10 text-base"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-space-32">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Запомнить меня') }}</span>
            </label>
        </div>

        <div class="flex flex-col items-center justify-end mt-space-32">
            <x-secondary-button class="w-full place-content-center" type="submit">
                {{ __('Войти') }}
            </x-secondary-button>

            @if (Route::has('password.request'))
                <a class="mt-space-32 underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Забыли логин или пароль?') }}
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
