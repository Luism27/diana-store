<div class="relative" x-data="{ open: false }" @close.stop="open = false" @mouseover.away="open=false" class="flex items-center">
    <div @mouseenter="open = true" @click="open=true">
        <div class="flex -mr-2 md:fex">
            <button  class="justify-center block p-2 transition duration-150 ease-in-out rounded-md text-store1-600 hover:text-gray-100 hover:bg-store1-600 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                <i :class="{'hidden': open, 'inline-flex': ! open }" class="fas fa-bars fa-lg"></i>             
            </button >
        </div>
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute left-0 z-50 w-48 mt-2 origin-top-left rounded-md shadow-lg"
            style="display: none;"
            @mouseenter="open = true"
            @click.away="open = false"
            >
        <div class="py-1 bg-white rounded-md ring-1 ring-black ring-opacity-5 pl-7" >
            @foreach ($categorias as $categoria)
                @component('subcategoria-menu',['subcategorias'=>$categoria->subcategorias,'categoria'=>$categoria])
                    @slot('name')
                    {{$categoria->name}}       
                    @endslot
                @endcomponent                    
                {{-- <x-subcategoria-menu >
                    <x-slot name="name" >
                    </x-slot>
                    <x-slot name="subcategorias">
                        {{$categoria->subcategorias}}
                    </x-slot>
                </x-subcategoria-menu> --}}
                <hr>      
            @endforeach
        </div>
    </div>
</div>
{{-- <div 
    x-data="{open: false}"
    >
    <x-jet-dropdown align="left" width="48">
        <x-slot name="trigger"> 
            <div class="flex items-center -mr-2 md:fex" @mouseover.away="categoria= false">
                <button @mouseover="categoria = true" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    Categorias
                   
                    <i :class="{'hidden': categoria, 'inline-flex': ! categoria }" class="fas fa-bars fa-lg"></i>   
                    <i :class="{'hidden': ! categoria, 'inline-flex': categoria }" class="fas fa-times-circle fa-lg"></i>
              
                </button>
            </div>
        </x-slot>
        <x-slot name="content" >
            <div class="">h1</div>
            <div class="">h2</div>
            <div class="">h3</div>
        </x-slot>
    </x-jet-dropdown>
</div> --}}
