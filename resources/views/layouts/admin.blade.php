<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropzone.min.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    {{-- <header class="container z-0 justify-center hidden mx-auto md:col-span-7 lg:col-span-11 md:flex">
        <div class="object-center px-4 pt-4 mx-auto text-4xl font-bold justify-items-center max-w-7xl md:flex md:items-center sm:px-6 lg:px-8 text-store1-600">
            <a href="{{ route('home') }}">
                <x-app-logo-name />
            </a>
        </div>
    </header> --}}
    @livewire('navigation-menu')
    <main>
        <div class="grid grid-cols-1 md:grid-cols-8 lg:grid-cols-12">
            <div class="hidden md:flex md:col-span-1">
                <x-user-sidebar />
            </div>
            <div class="col-span-1 md:col-span-7 lg:col-span-11 md:mx-8 md:py-8">
                {{ $slot }}
            </div>
        </div>
    </main>



    {{-- Scripts --}}
    @stack('modals')
    @livewireScripts
</body>
</html>