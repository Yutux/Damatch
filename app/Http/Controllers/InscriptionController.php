<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }
    //Inscription
    public function fill()
    {
        request() ->validate([
            'name' => 'required', 'name',
            'surname' => 'required', 'surname',
            'email' => 'required', 'email',
            'password' => 'required', 'confirmed', 'nin:8',
            'password_confirmation' => 'required',
            
        ]);
        
        $users = users::create([
            'name' => request('name'),
            'surname'=> request('surname'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);
        
        return redirect('/');
    }
}
