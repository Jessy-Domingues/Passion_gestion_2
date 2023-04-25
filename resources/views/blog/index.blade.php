<x-app-layout>
    <slot>
<section class="bg-neutral-100">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-neutral-700 capitalize mb-20 lg:text-4xl">Bienvenue sur le blog</h1>

        @foreach ($articles as $article)
            
        <div class="mt-8 lg:-mx-6 lg:flex lg:items-start">
            <img class="object-cover lg:mx-6 max-w-[30%] rounded-xl h-72  drop-shadow-[5px_5px_20px_rgba(0,0,0,0.25)] lg:h-96" src="{{ asset('/storage/' . $article->image) }}"alt="">

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