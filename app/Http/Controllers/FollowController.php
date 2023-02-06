<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;


class FollowController extends Controller
{   
    //systéme d'abonement
    public function new()
    {
        $userwhofollow = auth()->user();
        $userfollowed= users::where('name', request('name'))->first();

        $userwhofollow->follows()->attach($userfollowed);

        return back();
        
    }

    public function delete(){

        $userwhofollow = auth()->user();
        $userfollow= users::where('name', request('name'))->first();

        $userwhofollow->follows()->detach($userfollow);

        return back();

    }
}
