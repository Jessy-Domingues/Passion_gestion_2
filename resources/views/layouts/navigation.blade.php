@auth
<nav class="bg-transparent border-gray-200 px-4 lg:px-6 py-2.5 flex flex-wrap justify-between items-center w-full">
    <!-- Primary Navigation Menu -->
    <div class="w-full lg:w-10/12 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between max-md:flex-col max-md:items-center h-auto">
            <div class="flex max-md:flex-col">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img class="h-full w-3/4 max-md:m-auto" src="{{ asset('Logorange2.png') }}" alt="Logo">
                    </a>
                </div>
                
                <!-- Menu des articles -->
                <div id="mobile" class="hidden max-md:space-y-4 max-md:my-5 md:space-x-8 md:-my-px md:ml-10 max-md:items-center md:flex max-md:flex-col">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" >
                        {{ __('Menu des articles') }}
                    </x-nav-link>
                

                <!-- Volet création d'articles -->
                    <x-nav-link :href="route('articles.create')" :active="request()->routeIs('articles.create')" class="active:underline-orange-500">
                        {{ __('Créer un article') }}
                    </x-nav-link>
                

                <!-- Volet consultation blog -->
                    <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')" class="active:underline-orange-500">
                        {{ __('Aperçu du blog') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div id="mobile-menu-1" class="hidden md:flex md:items-center md:ml-6">
                @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Deconnexion') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>    
                @endauth
                
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center md:hidden">
                <button onclick="Function(), Fun()" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
@endauth
