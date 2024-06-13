<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description', 'instructor_id', 'start_date', 'end_date'];

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_permissions');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
