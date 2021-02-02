<x-admin-layout>
    <div  class=" grid grid-cols-1 gap-4 md:grid-cols-2">
        <a 
        class="group h-full bg-yellow-400 rounded-lg 
        shadow-xl hover:bg-yellow-700 hover:text-white 
        transition duration-700
        cursor-pointer justify-items-stretch
        grid py-16 
        " 
        href="{{route('profile.admin.crud.producto')}}"
        > 
            <img src="{{asset('storage/pictures/engranaje.png')}}" alt="Crear Producto" width="200px" height="100px"
            class="transition duration-700 transform group-hover:rotate-180 justify-self-center"
            {{-- x-show="isHover" --}}
            {{-- x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90" --}}
            >
            <div class="
                text-4xl
                justify-self-center
            ">
                productos
            </div>
        </a>
        <div>
            Crear Personas
        </div>  
    </div>
</x-admin-layout>