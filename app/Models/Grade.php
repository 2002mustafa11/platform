<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['student_id', 'quiz_id', 'score'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
