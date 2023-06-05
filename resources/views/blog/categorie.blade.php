<x-app-layout>
    <slot>
    <div class="container w-[80%] px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-neutral-700 indent-10 mb-20 lg:text-4xl">Articles par catégories</h1>

    @foreach ($articles as $article)
        
    <div class="mt-14 lg:-mx-6 lg:flex lg:items-start">
            <img class="object-cover lg:mx-6 lg:w-1/3 max-w-[25%] rounded-xl h-72  drop-shadow-[5px_5px_20px_rgba(0,0,0,0.25)] lg:h-80" src="{{ asset($article->image) }}"alt="photo article">

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

    </slot>
</x-app-layout>
