<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['first_name','last_name','group_id'];
    
    public function groups()
    {
        return $this->hasMany(Group::class);
    }
    
}
