<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['title', 'content', 'module_id', 'order'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}
