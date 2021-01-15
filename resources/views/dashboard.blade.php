<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Pagina de Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-4 overflow-hidden bg-red-500 shadow-xl sm:rounded-lg">
                <x-jet-welcome />
                <x-jet-welcome />
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
