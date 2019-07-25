<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    protected $fillable = ['name', 'description'];
    protected $attributes = [
        'done' => false
    ];
    //
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
