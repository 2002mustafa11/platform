<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoursePermission extends Model
{
    protected $fillable = ['course_id', 'student_id', 'permission'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
