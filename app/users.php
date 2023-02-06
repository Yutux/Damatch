<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class users extends Model implements Authenticatable 
{
    use BasicAuthenticatable;

    protected $fillable = ['name', 'surname','email', 'password'];
    public function getAuthPassword()
    {
        return $this->password;
    }

    public function messages()
    {
        return $this->hasMany(Message::class)->latest();
    }

    public function follows()
    {
        return $this->belongsToMany(users::class, 'follows', 'whofollow_id', 'followed_id');
    }

    public function follow($users)
    {
        return $this->follows()->where('followed_id', $users->id)->exists();
    }



   /* public function reviews()
    {
        return $this->hasMany(Review::class)->latest();
    }*/

    public function getRemenberTokenName()
    {
        return '';
    }
    
}