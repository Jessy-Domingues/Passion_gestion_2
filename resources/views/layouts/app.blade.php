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
    <link rel="icon" type="image/x-icon" href="../../img/fav.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
        var cont = 0;

        function loopSlider() {
            var xx = setInterval(function() {
                switch (cont) {
                    case 0: {
                        $("#slider-1").fadeOut(400);
                        $("#slider-2").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-orange-600");
                        $("#sButton2").addClass("bg-orange-600");
                        cont = 1;

                        break;
                    }
                    case 1: {

                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-orange-600");
                        $("#sButton1").addClass("bg-orange-600");

                        cont = 0;

                        break;
                    }


                }
            }, 8000);

        }

        function reinitLoop(time) {
            clearInterval(xx);
            setTimeout(loopSlider(), time);
        }



        function sliderButton1() {

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-orange-600");
            $("#sButton1").addClass("bg-orange-600");
            reinitLoop(4000);
            cont = 0

        }

        function sliderButton2() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-orange-600");
            $("#sButton2").addClass("bg-orange-600");
            reinitLoop(4000);
            cont = 1

        }

        $(window).ready(function() {
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-orange-600");

            loopSlider();

        });
    </script>
    <script>
    function myFunction() {
  var menu = document.getElementById("mobile-menu-2");
  if(menu.style.display === "flex"){
    menu.style.display = "none";
  }
  else {
    menu.style.display = "flex"
  }; 
}
function Function() {
  var menu = document.getElementById("mobile");
  if(menu.style.display === "flex"){
    menu.style.display = "none";
  }
  else {
    menu.style.display = "flex"
  };
}
function Fun() {
  var menu = document.getElementById("mobile-menu-1");
  if(menu.style.display === "flex"){
    menu.style.display = "none";
  }
  else {
    menu.style.display = "flex"
  };
}

</script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-Karla">
    <div class="min-h-screen bg-gray-100">


        <!-- Page Heading -->

        <header class="bg-gray-200/75 bg-gradient-to-b from-gray-500/25 via-gray-300/50 to-gray-100">

            
            @include('layouts.navigation')
            @guest
            <div class="h-auto w-full lg:w-4/5 m-auto">
                <nav class="bg-transparent border-gray-200 px-4 lg:px-3 py-6 flex flex-wrap justify-between items-center w-full">

                    <div class="w-10/12 max-sm:m-auto sm:w-3/12 md:w-3/12 lg:w-2/12 lg:ml-20">
                    <a href="{{ route('home') }}"><img class="h-full w-auto m-auto" src="../img/Logorange2.png" alt="Logo"></a>
                    </div>
                    <button onclick="myFunction()" data-collapse-toggle="mobile-menu-2" type="button" class="order-1 sm:order-2 w-1/12 sm:w-3/12 inline-flex justify-center items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-transparent dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Ouvrir Menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    <div class="hidden order-1 lg:flex flex-col m-auto sm:m-0 lg:flex-row items-center justify-between w-4/12 lg:w-7/12" id="mobile-menu-2">
                        <div class="justify-center lg:justify-between items-center w-full flex lg:w-auto lg:order-1">
                            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 text-center lg:mt-0">
                                <li class="font-medium text-sm my-1  hover:bg-slate-300 dark:hover:bg-slate-800 sm:p-0 sm:hover:bg-transparent text-primary">
                                    <a href="{{ route('home')}}" class="font-bold text-base text-neutral-700 hover:text-orange-500 transition duration-300">Accueil</a>
                                </li>
                                <li class="font-medium text-sm my-1 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-800 sm:p-0 sm:hover:bg-transparent text-gray-600 hover:text-primary transition-colors">
                                    <a href="{{ route('blog.index')}}" class="font-bold text-base text-neutral-700 hover:text-orange-500 transition duration-300">Blog</a>
                                </li>
                                <li class="font-medium text-sm my-1 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-800 sm:p-0 sm:hover:bg-transparent text-gray-600 hover:text-primary transition-colors">
                                    <a href="{{ route('contact.index') }}" class="font-bold text-base text-neutral-700 hover:text-orange-500 transition duration-300">Contact</a>
                                </li>
                            </ul>
                        </div>

                    <div class="flex flex-col lg:flex-row items-center lg:order-2">
                        <a href="{{ route('login') }}" class="font-bold text-neutral-800 focus:ring-4 rounded-lg text-sm px-2.5 py-2.5 my-2 lg:mr-2 border border-orange-500 transition duration-300 hover:bg-orange-500/90 ">Se connecter</a>
                        <a href="{{ route('register') }}" class="font-bold text-neutral-800 bg-orange-500/90 border border-orange-500 transition duration-300 hover:bg-transparent focus:ring-4 rounded-lg text-sm px-2.5 py-2.5 my-2 lg:mr-2 ">S'enregistrer</a>
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
    <footer class="p-4 sm:p-6 bg-gray-200/75 bg-gradient-to-t from-gray-500/25 via-gray-300/50 to-gray-100">
            <div class="mx-auto max-w-screen-xl">
                <div class="md:flex md:justify-between md:flex-row flex flex-col justify-center">
                    <div class="mb-6 md:mb-0">
                        <a href="{{ route('home') }}">
                            <img class="h-[60%] md:max-lg:h-[50%] w-auto m-auto" src="../../img/Logorange2.png" alt="Logo">
                        </a>
                    </div>
                    <div class="xl:w-2/5 md:max-xl:w-1/2 w-full flex md:flex-row flex-col items-center md:justify-between">
                        <div class="p-5 text-center md:text-start">
                            <h2 class="mb-6 text-sm font-semibold text-neutral-700 uppercase">Pages</h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-4">
                                    <a href="{{ route('blog.index')}}" class="hover:underline">Voir le blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact.index') }}" class="hover:underline">Page contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-5 text-center md:text-start">
                            <h2 class="mb-6 text-sm font-semibold text-neutral-700 uppercase">Mon compte</h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-4">
                                    <a href="{{ route('login') }}" class="hover:underline ">Se connecter</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}" class="hover:underline">S'enregistrer</a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-5 text-center md:text-start">
                            <h2 class="mb-6 text-sm font-semibold text-neutral-700 uppercase">Aspect legal</h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-4">
                                    <a href="#" class=" text-xs hover:underline">Politique de confidentialité</a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs hover:underline">Mentions légales</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>