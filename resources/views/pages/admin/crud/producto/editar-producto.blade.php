<x-admin-layout>
    <div class="grid grid-cols-1 container mx-auto shadow-lg w-2/5 justify-items-center rounded border-black border-opacity-30 border-2">
        <div class="text-2xl mt-4 font-bold grid grid-cols-5 w-full ">
            <div class="col-span-1 mx-2 align-middle">
                <a href=" {{route('profile.admin.crud.producto')}} ">
                    <i class="fas fa-arrow-circle-left fa-lg"></i>
                </a>
            </div>
            <div class="col-span-4 mx-auto">
                Editar Producto
            </div>
        </div>
        <div class="py-5">
            <form action="{{route('profile.admin.crud.producto.update',$producto)}}" method="post">
                @csrf
                @method('put')
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Nombre') }}" />
                    <x-jet-input placeholder="Ingrese nonbre del producto " id="name" class="block w-full mt-1" type="text" name="name" value="{{$producto->name}}" required autofocus />
                </div>
                <div class="mt-4">
                    <x-jet-label for="descripcion" value="{{ __('Descripcion') }}" />
                    <textarea placeholder="Ingrese descripción del producto" id="descripcion" class="block w-full mt-1 input h-36 " type="text" name="descricpcion" required autofocus >{{$producto->descripcion}}</textarea>
                </div>
                <div class="mt-4">
                    <x-jet-label for="subcategoria" value="{{ __('Categoria') }}" />
                    <select name="subcategoria" 
                    id="subcategoria"
                    class=" input  "
                    >
                    <option value=''>Escoge una categoria</option>
                    @foreach ($subcategorias as $subcategoria)
                        <option value={{$subcategoria->id}}
                        @if ($subcategoria->id === $producto->subcategoria->id)
                            selected
                        @endif
                        >{{$subcategoria->name}}-{{$subcategoria->categoria->name}}</option>      
                    @endforeach
                    </select>
                    
                </div>
                <div class="mt-4">
                    <x-jet-label for="precio" value="{{ __('Precio (COP)') }}" />
                    <x-jet-input placeholder="Ingrese precio del producto" id="precio" class="block w-full mt-1" type="number" name="precio" value="{{$producto->precio}}" required autofocus  />
                </div>
                <div class="mt-4">
                    <x-jet-label for="stock" value="{{ __('stock') }}" />
                    <x-jet-input placeholder="Ingrese su nombre completo" id="stock" class="block w-full mt-1" type="text" name="stock" value="{{$producto->stock}}" required autofocus  />
                </div>
                <div class="mt-4 grid grid-cols-2">
                    @foreach ($producto->fotos as $foto)
                        <img src="{{$foto->url}}" alt="Fotos producto" class="scale-150">
                    @endforeach
                </div>
                <div class="mt-4">
                    <x-jet-button>
                        {{ __('Editar') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>