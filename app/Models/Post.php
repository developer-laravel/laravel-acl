<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{    
    // protected $fillable = ['name','email'];

    public function user() 
    {

        return $this->belongsTo('App\Models\User', 'user_id', 'id');  // Certo
        //return $this->belongsTo('App\Models\User', 'id', 'user_id');    // Errado
        //return $this->belongsTo(User::class);  // Error
    }
}
