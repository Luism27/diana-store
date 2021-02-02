<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-white">
            <!-- Page Heading -->
            {{-- <div class="grid grid-cols-2 grid-rows-1 md:grid-rows-2 md:grid-cols-8 lg:grid-cols-12 ">
                <div class=" md:flex md:row-span-2 xs:absolute xs:left-0">
                    <div class="hidden w-full text-4xl font-bold lg:px-6 md:flex md:items-center lg:col-span-11 text-store1-600">
                        <a href="{{ route('home') }}">
                            <x-jet-application-mark class="block w-auto h-9" />
                        </a>
                    </div>
                    <div class="flex items-center object-center px-4 mx-auto text-4xl font-bold justify-items-center max-w-7xl sm:px-6 md:hidden text-store1-600">
                        <a href="{{ route('home') }}">
                            Diana Store
                        </a>
                    </div>
                </div>

                <header class="container z-0 justify-center hidden mx-auto md:col-span-7 lg:col-span-11 md:flex">
                    <!-- Logo -->
                    <div class="object-center px-4 pt-4 mx-auto text-4xl font-bold justify-items-center max-w-7xl md:flex md:items-center sm:px-6 lg:px-8 text-store1-600">
                        <a href="{{ route('home') }}">
                            <x-app-logo-name />
                        </a>
                    </div>
                
                </header>

                @livewire('navigation-menu')
            </div> --}}
            
            <header class="container z-0 justify-center hidden mx-auto md:col-span-7 lg:col-span-11 md:flex">
                <!-- Logo -->
                <div class="object-center px-4 pt-4 mx-auto text-4xl font-bold justify-items-center max-w-7xl md:flex md:items-center sm:px-6 lg:px-8 text-store1-600">
                    <a href="{{ route('home') }}">
                        <x-app-logo-name />
                    </a>
                </div>
            
            </header>

            @livewire('navigation-bar')

            <!-- Page Content -->
            <main class="">
                {{ $slot }}
                <div class="fixed bottom-4 right-4">
                    <button
                        class="relative inset-0 w-auto h-12 px-4 text-black transition duration-200 ease-in rounded-full shadow bg-store1-100 hover:bg-store1-600 active:shadow-lg focus:outline-none">
                        <i class="fas fa-comment-dots fa-lg"></i>
                  <span>Chat</span>
                </button>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
