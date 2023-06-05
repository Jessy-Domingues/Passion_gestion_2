<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreArticlesRequest;
use Illuminate\Database\DBAL\TimestampType;

class ArticlesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Articles::with('categories','user')->latest()->simplePaginate(10);
        $dern = Articles::latest()->first();
        $secDern = Articles::latest()->offset(1)->first();
        return view('blog.index', compact('articles','dern', 'secDern'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('blog.creation', compact('categories'));
    }

    /**
     * Cette méthode consiste à stocker l'article dans la table "articles" de la base de données.
     */
    public function store(StoreArticlesRequest $request)
    {
        $imageName = $request->file('image')->getClientOriginalName();
        $image = $request->image->storeAs('img',$imageName, 'public');
        Articles::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'image' => $imageName
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre article a été créer');
    }

    /**
     * Cette méthode correspond à la page single.
     */
    public function show(Articles $article)
    {
        return view('blog.show', compact('article'));
    }

    /**
     * Cette méthode est utilisée pour rediriger vers la vue de l'édition.
     */
    public function edit(Articles $article)
    {
        if (Gate::denies('articles.update', $article)) {
            abort(403);
        }
        
        $categories = Categories::all();
        return view('blog.edit', compact('article', 'categories'));
    }

    /**
     * Cette méthode est utilisée pour modifier un article, ici on émet une condition pour l'image à savoir, si dans la requette l'image n'est pas nulle,
     * alors l'image contenu dans la requette sera stockée, sinon l'article se mettra à jour sans l'image.
     */

    public function update(StoreArticlesRequest $request, Articles $article)
    {
        $arrayUpdate = [
            'titre' => $request->titre,
            'contenu' => $request->contenu
        ];

        if ($request->image != null) {
            $imageName = $request->image->store('articles');

            $arrayUpdate = array_merge($arrayUpdate, [
                'image' => $imageName
            ]);
        }
        $article->update($arrayUpdate);

        return redirect()->route('dashboard')->with('success', 'Votre article a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articles $article)
    {
        if (Gate::denies('articles.destroy', $article)) {
            abort(403);
        }
        $article->delete();

        return redirect()->route('dashboard')->with('detruit', 'Votre article a été supprimé');

    }

    public function filtre($id){

        $articles = Articles::all()->where('categories_id', $id)->sortByDesc('created_at');
        return view('blog.categorie', compact('articles'));
        
}
}
