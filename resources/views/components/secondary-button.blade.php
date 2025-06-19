<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient rounded-full font-semibold text-sm text-white  tracking-widest hover:bg-blue-500 focus:bg-blue-500 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
