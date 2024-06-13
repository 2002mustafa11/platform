<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['title', 'description', 'course_id', 'module_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}

