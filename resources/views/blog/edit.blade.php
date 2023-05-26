<x-app-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <h2 class="text-3xl font-semibold text-stone-700 indent-20 lg:text-4xl text-start my-10">Modification d'un article</h2>

    <div class="my-5">
        @foreach ($errors->all() as $error)
            <span class="block text-red-500">{{ $error }}</span>
        @endforeach
    </div>

   
    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data" class="mt-10 w-[80%] mx-auto">
    @method('PUT')
    @csrf
    <x-input-label for="titre" value="Titre de l'article" />
    <x-text-input class="w-1/2 focus:outline-orange-500" id="titre" name="titre" value="{{ $article->titre }}"/>

    <x-input-label for="contenu" value="Contenu de l'article" class="mt-3"/>
    <textarea class="whitespace-pre-wrap w-full h-36 focus:outline-none focus:ring-orange-500" name="contenu" id="contenu">{{ $article->contenu }}</textarea>

    <x-input-label for="image" value="Image de l'article"/>
    <x-text-input id="image" name="image" type="file"/>

    <x-input-label for="categorie" value="Categorie de l'article" class="mt-3"/>

    <select class="w-1/2" name="categorie" id="categorie">
        @foreach ($categories as $categorie)

            <option lass="checked:bg-neutral-200 hover:bg-orange-500" value="{{ $categorie->id }}" {{ $article->categorie_id === $categorie->id ? 'selected' : '' }}>
                {{ $categorie->nom }}</option>

        @endforeach
    </select>

    <x-primary-button style="display: block !important" class="mt-5 transition duration-300 hover:bg-orange-500/90 active:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">Modifier mon article</x-primary-button>

    </form>

    </div>

    
</x-app-layout>