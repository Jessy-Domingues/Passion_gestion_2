<x-app-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="my-5">
        @foreach ($errors->all() as $error)
            <span class="block text-red-500">{{ $error }}</span>
        @endforeach
    </div>

   
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="mt-10">
    
    @csrf
    <x-input-label for="titre" value="Titre de l'article" />
    <x-text-input id="titre" name="titre"/>

    <x-input-label for="contenu" value="Contenu de l'article" class="mt-3"/>
    <textarea name="contenu" id="contenu"></textarea>

    <x-input-label for="image" value="Image de l'article"/>
    <x-text-input id="image" name="image" type="file"/>

    <x-input-label for="categorie" value="Categorie de l'article" class="mt-3"/>

    <select name="categorie" id="categorie">
        @foreach ($categories as $categorie)

            <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>

        @endforeach
    </select>

    <x-primary-button style="display: block !important" class="mt-5">Créer mon article</x-primary-button>

    </form>

    </div>

    
</x-app-layout>