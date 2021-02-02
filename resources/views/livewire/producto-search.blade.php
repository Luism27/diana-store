<div class="relative">
    <input type="text"
        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-store1-300 focus:ring focus:ring-store1-200 focus:ring-opacity-50"
        wire:model="query"
        wire:keydown.escape="resett""
    >
    
    @if (!empty($query))
        <div class="absolute z-10 grid items-center justify-center w-full grid-cols-1 py-2 overflow-y-auto font-sans bg-white rounded shadow-xl h-72">
            @if (count($productos) != 0)
                @foreach ($productos as $i=>$producto)
                @php
                    foreach ($producto->fotos as $key => $foto) {
                        if ($foto->principal($foto)) {
                            $url = $foto->url;
                        }
                    }
                    @endphp
                    <a  href="{{route('productos.show',$producto)}}" 
                        class="block p-4 border-b group hover:bg-store1-600">
                        {{$producto['name']}} - {{$producto->subcategoria->name}}
                        {{-- <img src="{{$url}}" alt="Imagen Producto" width="20" height="20"> --}}
                    </a> 
                @endforeach
            @else 
               
                <div class="absolute z-10 grid items-center justify-center w-full h-48 grid-cols-1 py-8 overflow-y-auto font-sans bg-white rounded shadow-xl">
                    Sin Resultados
                </div>
                
            @endif
        </div> 
    @endif
</div>
