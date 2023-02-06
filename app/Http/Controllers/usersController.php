<?php

namespace App\Http\Controllers;

use App\users;
use App\Message;
use App\Review;

class usersController extends Controller
{
   //list de tous les utilisateur 
    public function list()
    {
        $users = users::all();
        return view('users')->with('users', $users);    
    
    }



    /*public function people($people)
    {
        $users=users::where('id', $people)->first();
        return view('people')->withProd('users', $users); 
        
    }*/

    // voir l'utilisateur choisi dans une page précise
    public function see(){
        $name= request('name');
        
        $users= users::where('name', $name )->first();
        
        return view('people', [
            'users' => $users,    
        ]);
    }
}
