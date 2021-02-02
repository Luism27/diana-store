<div class="relative">
    {{-- {{$ciudades}} --}}
    <input 
        type="text"
        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-store1-300 focus:ring focus:ring-store1-200 focus:ring-opacity-50"
        required
        placeholder="Ingrese una ciudad..."
        wire:model="query"
        wire:keydown.escape="resett"
        {{-- wire:keydown.tab = "resett" --}}
        name="ciudade"

    >
    @if (!empty($query) and !$isfinish)

        {{-- <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="resett"></div> --}}

        <div class="absolute z-10 grid items-center justify-center w-full h-48 grid-cols-1 py-2 overflow-y-auto font-sans bg-white rounded shadow-xl">
            @if (count($ciudades) != 0)
                @foreach ($ciudades as $i=>$ciudade)
                    <div wire:click="clickk('{{$ciudade['name']}}')" 
                        href="" 
                        wire:keydown.enter = "clickk('{{$ciudade['name']}}')"
                        class="block p-4 border-b group hover:bg-store1-600 ">
                        ({{$ciudade['id']}}) {{$ciudade['name']}}--{{$ciudade->departamento->name}} 
                    </div> 
                @endforeach
            @else 
               
                <div class="absolute z-10 grid items-center justify-center w-full h-48 grid-cols-1 py-8 overflow-y-auto font-sans bg-white rounded shadow-xl">
                    Sin Resultados
                </div>
                
            @endif
        </div> 
    @endif
    

</div>

