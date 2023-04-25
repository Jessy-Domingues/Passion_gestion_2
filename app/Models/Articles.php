<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot(){
        parent::boot();

        self::creating(function($article){
            $article->user()->associate(auth()->user()->id);
            $article->categories()->associate(request()->categorie);
        });

        self::updating(function ($article) {
            $article->categories()->associate(request()->categorie);
        });

    }
    

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsTo(Categories::class);
    }
}
