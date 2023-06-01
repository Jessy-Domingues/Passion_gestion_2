<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolController extends Controller
{
    public function pol(){
        return view('politique');
    }
    public function ml(){
        return view('mentions');
    }
}
