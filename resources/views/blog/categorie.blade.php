<x-app-layout>
    <slot>
        
        @foreach ($articles as $article)

        <h2 class="text-3xl font-semibold text-stone-700 capitalize lg:text-4xl text-center my-10">{{ $article->categories->nom }}</h2>

        @endforeach

        

        
    </slot>
</x-app-layout>