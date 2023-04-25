<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticlesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */


     /**
      * Ici, si la route est celle de la création alors l'image sera requise, si la route est celle de l'édition alors l'image ne sera pas requise.
      */

    public function rules(): array
    {
        if(request()->routeIs('articles.store')) {
            $imageRule = 'image|required';
        } elseif (request()->routeIs('articles.update')) {
            $imageRule = 'image|sometimes';
        }
        

        return [
            'titre' => 'required',
            'contenu' => 'required',
            'image' => $imageRule,
            'categorie' => 'required'
        ];
    }

    /**
     * Ici cette méthode va vérifier si dans la requette le champ image est nul, si c'est le cas on va demander à la requete de supprimer l'image.
     */

    protected function prepareForValidation()
    {
        if($this->image == null) {
            $this->request->remove('image');
        }
    }
}
