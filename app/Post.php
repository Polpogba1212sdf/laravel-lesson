<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'post'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
