<div class="relative">

    <input 
        type="text"
        class="block w-full mt-1 text-gray-500 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:border-store1-300 focus:ring focus:ring-store1-200 focus:ring-opacity-50"
        required
        placeholder="Ingrese un departamento..."
        wire:model="query"
        disabled
        name="departamento"

    >
    {{-- {{$departamentos}} --}}
    @if (!empty($departamentos))
        <div class="absolute z-10 grid items-center justify-center w-full h-48 grid-cols-1 py-8 overflow-y-auto font-sans bg-white rounded shadow-xl bg-blue-darker ">
            @foreach ($departamentos as $departamento)
                <div wire:click="clickk('{{$departamento->name}}')" href="" class="block p-4 border-b group hover:bg-store2"> {{$departamento->name}} </div> 
            @endforeach
        </div> 
    @endif

</div>
