<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Passion Gestion</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            

            <!-- Page Heading -->
            
            <header class="bg-gray-200/75">
            

            @include('layouts.navigation')
             @guest
        <div class="h-auto w-4/5 m-auto">
        <nav class="bg-transparent border-gray-200 px-4 lg:px-3 py-2.5 flex flex-wrap justify-between items-end w-full">
        
                <div class="w-1/12"> FB IG TW
                </div>
                <div class="flex items-center lg:order-2">
                    <a href="{{ route('login') }}" class="text-neutral-800 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 border border-orange-500 transition duration-300 hover:bg-orange-500/90 ">Log in</a>
                    <a href="{{ route('register') }}" class="text-neutral-800 bg-orange-500/90 border border-orange-500 transition duration-300 hover:bg-transparent focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 ">Get started</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <div>
                    <h1 class="text-7xl font-bold mb-10 text-neutral-800">LOGO</h1> 
                    </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 text-center lg:mt-0">
                        <li class="font-medium text-sm p-3 hover:bg-slate-300 dark:hover:bg-slate-800 sm:p-0 sm:hover:bg-transparent text-primary">
                            <a href="{{ route('home')}}" class="text-neutral-700 hover:text-orange-500 transition duration-300">Accueil</a>
                        </li>
                        <li class="font-medium text-sm p-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-800 sm:p-0 sm:hover:bg-transparent text-gray-600 hover:text-primary transition-colors">
                            <a href="{{ route('blog.index')}}" class="text-neutral-700 hover:text-orange-500 transition duration-300">Blog</a>
                        </li>
                        <li class="font-medium text-sm p-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-800 sm:p-0 sm:hover:bg-transparent text-gray-600 hover:text-primary transition-colors">
                            <a href="{{ route('contact.index') }}" class="text-neutral-700 hover:text-orange-500 transition duration-300">Contact</a>
                        </li>
                    </ul>
                </div>
                </div>
                
        </nav>
        </div>

        @endguest
        
    </header>
    

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

