<div class="flex flex-col items-center h-screen min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
    <div class="mb-5 ">
        {{ $logo }}
    </div>
    <div class="items-center justify-center w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md justify-self-auto sm:max-w-md sm:rounded-lg">
        <div>
            {{ $slot }}
        </div>
    </div>
</div>
