<div class="relative items-center block" x-data="{ open: false }" @close.stop="open = false" @mouseover.away="open=false">
    <a href="{{route('categoria.index',$categoria)}}" @mouseenter="open = true" @click="open=true">
        <div class="flex -mr-2 md:fex ">
            <div  class="justify-center w-full p-2 transition duration-150 ease-in-out rounded-md lock text-store1-600 hover:text-gray-100 hover:bg-store1-600 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                {{$name}}
                <i class="right-0 fas fa-arrow-right fa-sm"></i>           
            </div>
        </div>
    </a>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute top-0 w-full origin-right rounded-md shadow-lg left-42"
            style="display: none;"
            @mouseenter="open = true"
            @click.away="open = false"
            >
        <div class="bg-white rounded-md ring-1 ring-black ring-opacity-5 pl-7 py-7" >
            @foreach ($subcategorias as $subcategoria)
                @if ($subcategoria)
                    <div class="z-50 h-auto min-h-1/4">
                        <a href=" {{route('categoria.subcategoria',[$subcategoria->categoria,$subcategoria])}} ">{{$subcategoria->name}}</a>
                    </div> <hr class="mb-3">
                @endif
            @endforeach
            {{-- <h1>{{$subcategorias}}</h1> --}}
        </div>
    </div>
</div>