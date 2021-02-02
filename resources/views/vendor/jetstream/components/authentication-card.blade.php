<div class="flex flex-col items-center h-screen min-h-screen py-10 pt-6 bg-gray-100 sm:justify-center sm:pt-0">
    <div class="mb-5 ">
        {{ $logo }}
    </div>
    <div class="items-center justify-center w-full h-screen px-6 py-4 mt-6 overflow-auto bg-white shadow-md justify-self-auto sm:max-w-md sm:rounded-lg no-scrollbar">
        <div>
            {{ $slot }}
        </div>
    </div>
</div>
