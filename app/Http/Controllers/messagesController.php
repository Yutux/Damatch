<?php

namespace App\Http\Controllers;

use App\Message;
use App\users;

class messagesController extends Controller
{

    public function new()
    {
        //ajouter un message
        request()->validate([
            'message' => ['required'],
        ]);

        auth()->user()->messages()->create([
            'content' => request('message'),
        ]);

        /*Message::create([
            'users_id' => auth()->id(),
            'content' => request('message'),

        ]);*/

        flash("comment posted!")->success();
        return back();
    }

    
}
