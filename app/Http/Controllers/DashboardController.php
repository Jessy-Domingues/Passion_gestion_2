<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        
        $articles = auth()->user()->articles;

        return view('dashboard', compact('articles'));
    }


}
