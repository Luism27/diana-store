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
            <header class="bg-white container  mx-auto justify-center hidden sm:flex">
                <!-- Logo -->
                <div class=" object-centerr">
                    <a href="{{ route('home') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>
            
            </header>
            @livewire('navigation-menu')


            <!-- Page Content -->
            <main >
                <div class="grid grid-cols-1 md:grid-cols-5">
                    <div class=" hidden md:block col-span-1 pl-2">
                        @livewire('side-bar-component')
                    </div>
                    <div class="mx-4 col-span-4 px-5">
                        {{ $slot }}
                    </div>
                </div>
                <div class="fixed bottom-4 right-4">
                    <button
                        class="text-black px-4 w-auto h-12 bg-store1-100 rounded-full hover:bg-store1-600 active:shadow-lg relative inset-0  shadow transition ease-in duration-200 focus:outline-none">
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
