<x-app-layout>
    <slot>
        
        <h2 class="text-3xl font-semibold text-stone-700 lg:text-4xl text-center my-10">{{ $article->titre }}</h2>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <img class="w-9/12 rounded-xl mx-auto" src="{{ asset('/storage/' . $article->image) }}" alt="Photo de l'article">

        <div class="text-stone-500 indent-10 text-start mt-10">
        {{ $article->contenu }}
        </div>

        </div>

        
    </slot>
</x-app-layout>