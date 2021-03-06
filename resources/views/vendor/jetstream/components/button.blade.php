<button {{ $attributes->merge(['type' => 'submit', 'class' => 
        'inline-flex 
        items-center 
        px-4 py-2 
        bg-store1-400 
        border border-transparent 
        rounded-md font-semibold 
        text-xs text-white 
        uppercase 
        tracking-widest 
        hover:bg-store1-500 
        active:bg-store1-600 
        focus:outline-none focus:border-gray-900 focus:shadow-outline-gray 
        disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
