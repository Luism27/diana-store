@php
    $user = Auth::user()->role_id;
    $nav_links = [
        [
            'name'=>'Perfil',
            'route' => route('profile.show'),
            'active'=>request()->routeIs('profile.show'),
        ],
        [
            'name'=>'Admin',
            'route' => route('profile.admin.dashboard'),
            'active'=> request()->routeIs('profile.admin.*'),
        ],


    ];
@endphp
<nav x-data="{ openn: false}" class="w-full pb-5  {{ request()->routeIs('profile.admin.*') ? ' bg-pastel-200' : 'bg-white'  }} {{ request()->routeIs('profile.admin.*') ? ' shadow-md' : ''  }}  pegado" >
    {{-- {{$user}} --}}
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-1 lg:px-1" >
        <div class="flex justify-between h-16 ">
            <div class="flex">
                {{-- rigth hamburguer --}}
                {{-- <div class="flex md:items-center">
                    @livewire('categoria-drop')
                </div> --}}
                <div class=" md:flex md:row-span-2 xs:absolute xs:left-0">
                    <div  
                        class="hidden text-4xl font-bold lg:px-6 md:flex md:items-center lg:col-span-11 text-store1-600"
                        >
                        <a href="{{ route('home') }}">
                         <x-app-logo-name-movil class="pb-3" />
                        </a>
                    </div>
                    <div class="items-center object-center px-4 mx-auto mt-1 text-4xl font-bold justify-items-center max-w-7xl sm:px-6 md:hidden text-store1-600">
                        <a href="{{ route('home') }}">
                            <x-app-logo-name-movil />
                        </a>
                    </div>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                    
                    @foreach ($nav_links as $nav_link) 
                        @auth   
                            @if ( $user == 2 )
                                <x-jet-nav-link href="{{ $nav_link['route']}}" :active="$nav_link['active']" class="text-3xl font-helloDancing">
                                    {{ $nav_link['name'] }}
                                </x-jet-nav-link>
                            @else
                                @if ($nav_link['name'] != 'Admin')
                                    <x-jet-nav-link href="{{ $nav_link['route']}}" :active="$nav_link['active']" class="text-3xl font-helloDancing">
                                        {{ $nav_link['name'] }}
                                    </x-jet-nav-link>
                                @endif
                            @endif
                        @endauth
                    @endforeach

                    
                </div>
            </div>
            <div x-data="{}" 
                class="hidden md:flex md:items-center md:right-0 md:justify-self-end md:ml-10 md:space-x-4 md:pr-3">
                <div x-data="{hoverr: false,isClick:false}" class="hidden md:flex md:items-center">
                </div>  
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="relative ml-3">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-jet-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="relative ">
                    @auth
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                    <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                    @else
                        <a class="inline-flex items-center object-cover w-full h-12 px-3 py-4 text-xl font-bold text-black transition duration-200 ease-in font-helloDancing rounded-xl bg-store1-100 hover:bg-store1-600" 
                        href="{{route('login')}}" >Login</a> 
                    @endauth
                </div>
                

            </div>
            

            <!-- Hamburger -->
            <div class="flex items-center h-full -mr-2 md:hidden">
                <button @click="openn = ! openn" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': openn, 'inline-flex': ! openn }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! openn, 'inline-flex': openn }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Responsive Navigation Menu -->
    <div x-show="openn" @click="openn = false" class="sticky top-0 ">
        <div class="pt-2 pb-3 space-y-1">
            @foreach ($nav_links as $nav_link)
                @auth
                    <x-jet-responsive-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                        {{ $nav_link['name'] }}
                    </x-jet-responsive-nav-link>
                @else 
                    @if ($nav_link['name'] != 'Dashboard')
                        <x-jet-responsive-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                            {{ $nav_link['name'] }}
                        </x-jet-responsive-nav-link>
                    @endif
                @endauth
            @endforeach
        </div>

        <!-- Responsive Settings Options -->
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="flex-shrink-0 mr-3">
                            <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div>
                        <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-jet-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-jet-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-jet-responsive-nav-link>
                    </form>

                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-jet-responsive-nav-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-jet-responsive-nav-link>
                        @endcan

                        <div class="border-t border-gray-200"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                        @endforeach
                    @endif
                </div>
            </div>
        @else
            <div class="py-1 border-t border-gray-200">
                <x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                    Login
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                    Register
                </x-jet-responsive-nav-link>
            </div>
            
        @endauth
        

    </div>
    
</nav>

