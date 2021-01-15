<x-app-layout>
    <div class="grid grid-cols-1 gap-5 py-10 sm:grid-cols-2 lg:pr-40 xl:pr-80">
        @foreach ($productos as $i=>$producto)
            <div class=""> 
                <x-card-producto >
                    @slot('producto')
                        {{$producto->slug}}
                    @endslot
                    @slot('name')
                        {{$producto->name}}
                    @endslot
                    @slot('precio')
                        {{number_format($producto->precio)}}   
                    @endslot
                    @foreach ($producto->fotos as $foto)
                        @if ($foto->principal($foto))  
                            @slot('url')
                                {{$foto->url}}
                            @endslot
                        @endif
                    @endforeach
                </x-card-producto>
            </div> 
        @endforeach
    </div>   
    {{$productos->links()}}
</x-app-layout>