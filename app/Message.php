<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['users_id', 'content' ];

    public function Review()
    {
        return $this->belongsTo(Review::class)->latest();
    }

    public function users()
    {
        return $this->belongsTo(users::class)->latest();
    }
}
