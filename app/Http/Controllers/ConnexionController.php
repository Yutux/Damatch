<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion');
    }
    //connexion
    public function fill()
    {
        request()->validate([
            'email'=>'required', 'email',
            'password'=>'required'
        ]);

        $result = auth()->attempt([
            'email' => request('email'),
            'password'=> request('password'),
        ]);

        if ($result){
            return redirect('/Account');  
        };

        return back()->withInput()->withErrors([
            'email'=> 'your email or password are not right',
        ]);
    }
}
