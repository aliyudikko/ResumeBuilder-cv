<button {{ $attributes->merge(['type' => 'submit', 'class' => ' shadow-lg w-full
           inline-block px-6 py-2 rounded text-base font-medium cursor-pointer
            transition-all duration-500 focus:outline-none
           focus:ring-0 focus:ring-offset-0 hover:-translate-y-1.5 
           text-white pt-3  border-s-8 bg-fuchsia-600
            border-fuchsia-800']) }}>
    {{ $slot }}
</button>
