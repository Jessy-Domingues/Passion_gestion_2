<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolController extends Controller
{
    public function politique(){
        return view('politique');
    }
}
