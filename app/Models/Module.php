<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['title', 'description', 'course_id', 'order'];
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}