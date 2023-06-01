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
    <link rel="icon" type="image/x-icon" href="img/fav.png">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-Karla bg-gray-100">
    <div class="min-h-screen bg-gray-100">

        <header class="h-auto">
            <!-- Hero -->
            <section class="h-full bg-gradient-to-b from-neutral-700 via-gray-200 to-black">
                <div class="w-full py-12 h-full flex items-center flex-col justify-center bg-cover bg-center lg:bg-[center_bottom_-8rem] " style="background-image: url('{{ asset('img/CS_2.png') }}');">
                    <img class="h-auto" src="img/LT_PG.png" alt="Logo">
                    <p class="text-xl font-bold text-neutral-300">Construire, gérer, rêver</p>
                </div>
            </section>
            <!-- Fin Hero -->
            <!-- Menu authentifié -->
            @include('layouts.navigation')
            <!-- Fin Menu authentifié -->

            <!-- Menu public -->
            @guest
            <div class="h-auto w-9/10 bg-gray-200/75 bg-gradient-to-b from-gray-500/25 via-gray-300/50 to-gray-100">
                <nav class="bg-transparent border-gray-200 px-4 lg:px-3 py-4 flex flex-wrap justify-center items-center w-full">
                    <div class="justify-center items-center w-full h-auto flex lg:w-auto lg:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 text-center md:mt-0">
                            <li class="font-medium text-sm p-3 hover:bg-slate-300 dark:hover:bg-slate-800 md:p-0 sm:hover:bg-transparent text-primary">
                                <a href="{{ route('home')}}" class="font-bold text-base text-neutral-700 hover:text-orange-500 transition duration-300">Accueil</a>
                            </li>
                            <li class="font-medium text-sm p-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-800 md:p-0 sm:hover:bg-transparent text-gray-600 hover:text-primary transition-colors">
                                <a href="{{ route('blog.index')}}" class="font-bold text-base text-neutral-700 hover:text-orange-500 transition duration-300">Blog</a>
                            </li>
                            <li class="font-medium text-sm p-3 cursor-pointer hover:bg-slate-300 dark:hover:bg-slate-800 md:p-0 sm:hover:bg-transparent text-gray-600 hover:text-primary transition-colors">
                                <a href="{{ route('contact.index') }}" class="font-bold text-base text-neutral-700 hover:text-orange-500 transition duration-300">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            @endguest
            <!-- Fin Menu public -->
        </header>

        <!-- Première section -->
        <section class="mt-10">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto my-4 text-center lg:text-start lg:gap-8 xl:gap-0 lg:py-16 md:grid-cols-6 lg:grid-cols-12">
                <div class="lg:mr-auto place-self-center col-span-6 lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 max-sm:text-4xl text-5xl font-extrabold text-neutral-700 leading-none xl:text-6xl">Bienvenue sur notre site dédié aux jeux vidéo de gestion !</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Si tu es passionné par le monde de la gestion et que tu aimes relever des défis stratégiques, tu es au bon endroit.
                        Notre site est un véritable paradis pour les amateurs de jeux de simulation et de gestion, où tu pourras découvrir une sélection diversifiée de titres captivants.
                        Ce site s'adresse aussi à ceux qui n'y connaissent pas grand chose en terme de jeux de gestion et qui souhaite en découvrir d'avantage.</p>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img class="rounded-xl drop-shadow-[0_35px_35px_rgba(0,0,0,0.35)]" src="img/Farthest.jpg" alt="image farthest frontier">
                </div>
                <a href="{{ route('blog.index') }}" class="lg:col-start-1 lg:col-span-2 col-span-2 col-start-3 font-bold text-neutral-800 bg-orange-500/90 border border-orange-500 transition duration-300 hover:bg-transparent focus:ring-4 rounded-lg text-sm text-center px-2.5 py-2.5">
                    Voir nos derniers articles
                </a>
            </div>
        </section>
        <!-- Fin Première section -->

        <!-- Seconde section -->
        <section class="bg-white dark:bg-gray-800">
            <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
                <h2 class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">Les jeux de gestion en chiffres</h2>
                <div class="grid gap-8 text-gray-500 pb-5 sm:gap-12 md:grid-cols-3 lg:grid-cols-3 dark:text-gray-400">
                    <p class="text-lg text-center">Base de joueurs mondiale estimée à plus de:<br>
                        <span class="text-orange-500">1,5 milliard de personnes.</span>
                    </p>

                    <p class="text-lg text-center">Cities: Skylines, l'un des jeux de gestion les plus populaires:<br>
                        <span class="text-orange-500">7 millions de ventes depuis sa sortie en 2015.</span>
                    </p>

                    <p class="text-lg text-center">La franchise Football Manager, qui simule la gestion d'un club de football, est extrêmement populaire:<br>
                        <span class="text-orange-500">plus de 33 millions de ventes depuis ses débuts en 1992.</span>
                    </p>
                </div>
                <div class="sm:w-4/6 w-full py-5 m-auto text-gray-500 dark:text-gray-400">
                    <p class="text-lg text-center">Ces chiffres témoignent de la popularité et de l'impact des jeux de gestion dans l'industrie du jeu vidéo, attirant des millions de joueurs à travers le monde et offrant des expériences de jeu immersives et captivantes.</p>
                </div>
            </div>
        </section>
        <!-- Fin Seconde section -->

        <!-- Troisième section -->
        <section class="bg-transparent mb-10">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 ">
                <h2 class="font-extrabold mb-5 text-3xl text-center text-neutral-700">Un jeu de gestion c'est quoi?</h2>
                <div class="grid grid-cols-6">
                    <p class="lg:col-span-5 col-span-6 sm:max-lg:col-span-6 lg:text-start text-center text-lg text-gray-500">
                        Les jeux de gestion sont un genre de jeux vidéo qui mettent les joueurs aux commandes de diverses activités et leur permettent de prendre des décisions stratégiques pour atteindre des objectifs spécifiques. Ces jeux offrent une expérience immersive où les joueurs sont responsables de la gestion et du développement d'un système, d'une organisation ou d'un environnement virtuel.<br><br>

                        Dans les jeux de gestion, les joueurs sont souvent placés dans des rôles de gestionnaires, de chefs d'entreprise, de maires, de directeurs ou d'autres types de responsables. Leur objectif principal est de gérer efficacement les ressources, de prendre des décisions éclairées et de résoudre des problèmes complexes pour atteindre le succès.<br><br>

                        Ces jeux proposent une grande variété de thèmes et de contextes. Certains se concentrent sur la gestion de villes, où les joueurs doivent construire et développer des infrastructures urbaines, gérer l'économie, répondre aux besoins des habitants et résoudre les problèmes qui surviennent. D'autres jeux se concentrent sur la gestion d'entreprises, où les joueurs doivent gérer les finances, les ressources humaines, la production et la recherche pour développer une entreprise prospère.<br><br>
                    </p>
                    <p class="lg:col-end-7 mb-16 col-span-6 lg:col-span-5 sm:max-lg:col-span-6 lg:text-start text-center text-lg text-gray-500">
                        Les jeux de gestion peuvent également se dérouler dans des domaines spécifiques tels que les parcs à thème, les hôpitaux, les zoos, les fermes, les transports, les sports, la politique et bien d'autres encore. Chaque jeu propose son propre ensemble de défis et de mécanismes de jeu spécifiques liés au domaine de gestion choisi.<br><br>

                        La gestion des ressources est un aspect essentiel des jeux de gestion. Les joueurs doivent allouer efficacement les ressources disponibles, que ce soit de l'argent, des matériaux, du personnel ou d'autres types de ressources, afin d'optimiser les performances de leur système. La planification stratégique, la prise de décision éclairée et la gestion des priorités sont des compétences clés pour réussir dans ces jeux.<br><br>

                        En plus de la gestion des ressources, les jeux de gestion mettent souvent l'accent sur d'autres aspects tels que la résolution de problèmes, la créativité, la satisfaction des clients ou des citoyens, la recherche et le développement de nouvelles technologies, et la gestion des risques.
                    </p>
                    <p class="text-lg text-center font-bold col-start-2 col-span-4 text-gray-500">
                        Les jeux de gestion offrent aux joueurs une expérience immersive et stimulante, où ils peuvent développer leurs compétences en gestion, faire preuve de créativité et relever des défis stratégiques. Que tu cherches à construire et à gérer ta propre ville, à diriger une entreprise prospère ou à développer un empire virtuel, les jeux de gestion offrent une expérience captivante et gratifiante.
                    </p>
                </div>
            </div>
        </section>
        <!-- Fin Troisième section -->

        <!-- Début Quatrième section -->
        <section class="bg-gradient-to-b from-gray-900 to-gray-600 pb-5">
            <artcile>
                <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="font-light text-gray-500 mb-16 sm:text-lg text-center lg:text-start dark:text-gray-400">
                        <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Découvrez notre blog</h2>
                        <p class="mb-4">
                            Que vous cherchiez des astuces pour améliorer vos compétences de gestionnaire, des avis sur les derniers jeux de gestion à ne pas manquer, ou des réflexions approfondies sur l'industrie du jeu, notre blog est votre source. Rejoignez-nous et laissez-vous inspirer par nos contenus captivants.
                        </p>
                        <a href="{{ route('blog.index') }}" class="col-start-2 lg:col-span-2 font-bold text-gray-800 bg-orange-500/90 border border-orange-500 transition duration-300 hover:text-orange-500 hover:bg-transparent ring-orange-500 ring-offset-orange-500 focus:ring-4 rounded-lg text-base text-center px-5 py-2.5">
                            Le blog
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <img class="w-full rounded-lg" src="img/Cities Skylines 2.png" alt="image blog 1">
                        <img class="mt-4 w-full lg:mt-10 rounded-lg" src="img/PlanetZoo_4.jpg" alt="image blog 2">
                    </div>
                </div>
                </article>


                <article>
                    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                        <div class="mx-auto max-w-screen-sm text-center">
                            <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">Des questions à nous poser?</h2>
                            <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Vous avez des questions, des suggestions ou simplement envie de nous contacter ? Nous serions ravis d'entendre parler de vous ! Utilisez le formulaire dans la rubrique contact pour nous envoyer un message directement.</p>
                            <a href="{{ route('contact.index') }}" class="col-start-2 lg:col-span-2 font-bold text-neutral-800 bg-orange-500/90 border border-orange-500 transition duration-300 hover:text-orange-500 hover:bg-transparent focus:ring-4 rounded-lg text-base text-center px-5 py-2.5">
                                Rubrique contact
                            </a>
                        </div>
                    </div>
                </article>
        </section>
        <!-- Fin Quatrième section -->

        <footer class="p-4 sm:p-6 bg-gray-200/75 bg-gradient-to-t from-gray-500/25 via-gray-300/50 to-gray-100">
            <div class="mx-auto max-w-screen-xl">
                <div class="md:flex md:justify-between md:flex-row flex flex-col justify-center">
                    <div class="mb-6 md:mb-0">
                        <a href="{{ route('home') }}">
                            <img class="h-[60%] md:max-lg:h-[50%] w-auto m-auto" src="../img/Logorange2.png" alt="Logo">
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
                                    <a href="{{ route('politique') }}" class=" text-xs hover:underline">Politique de confidentialité</a>
                                </li>
                                <li>
                                    <a href="{{ route('mentions') }}" class="text-xs hover:underline">Mentions légales</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>