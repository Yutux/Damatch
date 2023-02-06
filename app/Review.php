<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['title', 'type', 'contenu', 'picture', 'users_id', 'message_id'];

   /* public function messages()
    {
        return $this->hasMany(Message::class)->latest();
    }*/

}
