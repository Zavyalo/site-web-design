<a {{ $attributes->merge([ 'class' => 'inline-flex items-center px-4 py-2 bg-gradient rounded-full font-medium text-sm text-white font-inter tracking-widest hover:bg-blue-500 focus:bg-blue-500 disabled:opacity-25 transition ease-in-out duration-150 justify-center h-[56px] w-full md:w-[231px]']) }}>
    {{ $slot }}
</a>
