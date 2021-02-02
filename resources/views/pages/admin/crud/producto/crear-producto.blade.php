<x-admin-layout>
    <div class="grid grid-cols-1 container mx-auto shadow-lg w-2/5 justify-items-center rounded border-black border-opacity-30 border-2">
        <div class="text-2xl mt-4 font-bold grid grid-cols-5 w-full ">
            <div class="col-span-1 mx-2 align-middle">
                <a href=" {{route('profile.admin.crud.producto')}} ">
                    <i class="fas fa-arrow-circle-left fa-lg"></i>
                </a>
            </div>
            <div class="col-span-4 mx-auto">
                Crear Producto
            </div>
        </div>
        <div class="py-5">
            <form action="{{route('profile.admin.crud.producto.crear')}}" method="post" enctype="multipart/form-data" class="">
                @csrf
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Nombre') }}" />
                    <x-jet-input placeholder="Ingrese nonbre del producto " id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus />
                </div>
                <div class="mt-4">
                    <x-jet-label for="descripcion" value="{{ __('Descripcion') }}" />
                    <textarea placeholder="Ingrese descripción del producto" id="descripcion" class="block w-full mt-1 input h-36 " type="text" name="descricpcion" required autofocus ></textarea>
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
                        >{{$subcategoria->name}}-{{$subcategoria->categoria->name}}</option>      
                    @endforeach
                    </select>
                    
                </div>
                <div class="mt-4">
                    <x-jet-label for="precio" value="{{ __('Precio (COP)') }}" />
                    <x-jet-input placeholder="Ingrese precio del producto" id="precio" class="block w-full mt-1" type="number" name="precio" :value="old('precio')" required autofocus  />
                </div>
                <div class="mt-4">
                    <x-jet-label for="stock" value="{{ __('stock') }}" />
                    <x-jet-input placeholder="Ingrese su nombre completo" id="stock" class="block w-full mt-1" type="text" name="stock" :value="old('stock')" required autofocus  />
                </div>
                {{-- <div class="mt-4">
                    <x-jet-label for="foto" value="{{ __('fotos') }}" />
                    <x-jet-input hidden id="foto" class="block w-full mt-1" type="file" name="foto" required autofocus  />
                </div>
                <div class="mt-4">
                    <div id="pre"></div>
                </div> --}}
                
                <div class="mt-4">
                    <x-jet-button >
                        {{ __('Crear') }}
                    </x-jet-button>
                </div>
            </form>
            <div class="mt-4">
                <form
                action="/foto-producto"
                class="dropzone"
                id="my-awesome-dropzone">
                {{ csrf_field() }}
                   <div class="dz-message">
                        <div class="icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <h2> Arrastra las imagenes del producto </h2>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{asset('js/dropzone/dist/dropzone.js')}}"></script>

    <script>
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // Las imágenes se van a usar bajo este nombre de parámetro
            maxFilesize: 1, // Tamaño máximo en MB
            success: function (file, response) {
                console.log(response);
            },
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name; 
                // name =name.replace(/\s+/g, '-').toLowerCase();    /*only spaces*/
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'delete',
                    url: '/foto-producto/'+name,
                    data: {
                        // "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                    },
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        };
    </script>
</x-admin-layout>