<x-app-layout>
    <slot>
        <section class="bg-neutral-100">
            <div class="container w-[80%] px-6 py-10 mx-auto">
                <h1 class="text-3xl font-semibold text-neutral-700 capitalize indent-10 mb-10 lg:text-4xl">Bienvenue sur le blog</h1>

                <div class="container px-6 py-10 h-auto mx-auto">

                    <div class="sliderAx relative h-[75vh]">
                        <div id="slider-1" class="container h-full mx-auto">
                            <div class="bg-cover bg-center flex flex-col justify-end rounded-3xl h-full text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
                                <div class="flex flex-col justify-end md:w-2/3">
                                    <p class="text-orange-500 text-lg uppercase">Services</p>
                                    <p class="text-4xl mb-2 text-gray-100 font-bold">Hello world</p>
                                    <p class="text-md indent-5 text-gray-100">Auteur</p>
                                    
                                </div>
                            </div> <!-- container -->
                            <br>
                        </div>

                        <div id="slider-2" class="container h-full mx-auto">
                            <div class="bg-cover flex flex-col justify-end bg-top rounded-3xl h-full text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">
                                <div class="flex flex-col justify-end md:w-2/3">
                                    <p class="text-orange-500 text-lg uppercase">Services</p>
                                    <p class="text-4xl text-gray-100 font-bold">Hello world</p>
                                    <p class="text-md indent-5 text-gray-100">Auteur</p>
                                    
                                </div>
                            </div> <!-- container -->
                            <br>
                        </div>
                        <div class="flex justify-between absolute bottom-10 left-20 w-12 mx-auto pb-2">
                                <button id="sButton1" onclick="sliderButton1()" class="bg-gray-300 rounded-full w-4 pb-2 "></button>
                                <button id="sButton2" onclick="sliderButton2() " class="bg-gray-300 rounded-full w-4 p-2"></button>
                        </div>
                    </div>
                    


                </div>

                @foreach ($articles as $article)

                <div class="mt-14 lg:-mx-6 lg:flex lg:items-start">
                    <img class="object-cover lg:mx-6 max-w-[25%] rounded-xl h-72  drop-shadow-[5px_5px_20px_rgba(0,0,0,0.25)] lg:h-80" src="{{ asset('/storage/' . $article->image) }}" alt="">

                    <div class="mt-6 lg:w-2/3 lg:mt-0 lg:mx-6 pt-10">
                        <a href="{{ route('blog.categorie', $article->categories->id) }}" class="text-sm text-orange-500 uppercase hover:underline">{{ $article->categories->nom }}</a>

                        <a href="{{ route('articles.show', $article) }}" class="block mt-2 text-2xl font-semibold text-neutral-700 hover:underline md:text-3xl">
                            {{ $article->titre }}
                        </a>

                        <p class="mt-3 text-sm text-neutral-500 md:text-sm">
                            {{ Str::limit($article->contenu, 300) }}
                        </p>

                        <a href="{{ route('articles.show', $article) }}" class="inline-block mt-2 text-neutral-600 underline hover:text-neutral-500">Voir plus</a>

                        <div class="flex items-center mt-6">

                            <div class="mx-4">
                                <h2 class="text-sm text-neutral-500">{{ $article->user->name }}</h2>
                                <p class="text-sm text-neutral-500">{{ $article->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="flex justify-center">
                {{ $articles->links() }}
            </div>

        </section>
    </slot>
</x-app-layout>