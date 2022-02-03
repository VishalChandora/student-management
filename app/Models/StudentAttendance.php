<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_classroom_id',
        'attendence_id',
        'is_present'
    ];

    public function studentClassroom()
    {
        return $this->belongsTo(StudentClassroom::class, 'student_classroom_id', 'id');
    }
    public function attendance()
    {
        return $this->belongsTo(Attendance::class, 'attendance_id', 'id');
    }

}
