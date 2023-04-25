<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
    
        return view('contact');
        
    }

    public function submit(ContactRequest $request){
        Mail::to('my@mail.com')->send(new ContactMail($request->nom, $request->email, $request->objet, $request->message));

        return redirect()->route('contact.index')->with('success', 'Votre message à bien été envoyé !!!');
    }
}
