<?php

namespace App\Models;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    
    public function articles(){
        return $this->hasMany(Articles::class);
    }

}
