<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class AccountController extends Controller
{
    public function Acceuil()
    { 
        
        return view('/Account');
    }
    
    //la deconnexion
    public function logout()
    {
        auth()->logout();
        
        return redirect('/');
    }
    
    public function update()
    {
        return view('/updateprofil');      
    }


    //l'update de l'utilisateur
    public function newpassword()
    {


        request()->validate([
            'name' => 'required', 'name',
            'surname' => 'required', 'surname',
            'email' => 'required', 'email',
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);

        auth()->user()->update([
            'name' => request('name'),
            'surname' => request('surname'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        flash("Your profil has been update !")->success();

        return redirect('/Account');
    }
}
