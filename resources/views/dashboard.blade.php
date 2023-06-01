<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h1 class="container w-[80%] mx-auto max-md:text-center md:indent-20 text-5xl mt-5 text-neutral-800 font-bold">Mes articles</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
            <div class = "p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <span class = "font-medium">{{ session('success') }}</span>
            </div>
                    
                    @endif

                    @if (session('detruit'))
                    <div class = "p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class = "font-medium">{{ session('detruit') }}</span>
                    </div>
                    
                    @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (empty($articles))
                    <p class="ml-20">Vous n'avez pas d'articles</p>
                @else
                @foreach ($articles as $article)
                
                    <div class="flex items-center max-lg:justify-center flex-wrap">
                    <div style= "background-image: url({{ asset('storage/'.  $article->image) }})" alt="photo_article" class="h-32 w-32 bg-contain bg-no-repeat bg-center"></div>
                    <a href="{{ route('articles.edit', $article) }}" class="rounded-md max-sm:text-center text-neutral-600 px-5 py-3 my-1 hover:text-orange-500 hover:underline">Editer article <strong>"{{ Str::limit($article->titre, 30) }}"</strong></a>
                    <a href="#" class="rounded-md text-neutral-600 px-5 py-3 my-1 max-sm:text-center hover:text-red-500 hover:underline" 
                    onclick="event.preventDefault;
                              document.getElementById('destroy-article-form').submit();">Supprimer article <strong>"{{ Str::limit($article->titre, 30) }}"</strong>
                    </a>
                    <hr>
                @endforeach
                @endif
                    </div>
                @if (empty($article)) 
                <p class="ml-20">Vous n'avez pas d'articles</p>
                @else
                    <form method="post" action="{{ route('articles.destroy', $article->id) }}"  id="destroy-article-form">
                        @csrf
                        @method('delete')
                    </form>
                @endif  
            </div>
        </div>
    </div>
</x-app-layout>