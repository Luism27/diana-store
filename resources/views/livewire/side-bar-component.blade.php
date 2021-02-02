<div x-data="{isTop: true}" class="left-0 top-16 sm:justify-around"
@scroll.window=" isTop = (window.pageYOffset > 80) ? false:true"
:class=" isTop ? 'sticky':'fixed' "
>
    <div class="w-64 h-screen bg-transparent"> 
            <div class="font-serif text-3xl font-bold justify-self-center pl-7">Categoria</div>
                <div class="z-0 mt-1">
                    @foreach ($categorias as $categoria)
                        @component('subcategoria-menu',['subcategorias'=>$categoria->subcategorias,'categoria'=>$categoria])
                            @slot('name')
                            {{$categoria->name}}       
                            @endslot
                        @endcomponent                    
                    @endforeach
                </div   >
        </div>        
</div>