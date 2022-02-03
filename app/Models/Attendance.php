<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'term_id',
        'section_id',
        'division_id',
        'teacher_id',
        'subject_id',
        'date',
        'slot_start_time',
        'slot_end_time',
        
    ];

    public function term()
    {
        return $this->belongsTo(Term::class ,'term_id' , 'id');

    }
    public function section()
    {
        return $this->belongsTo(Section::class ,'section_id' , 'id');

    }
    public function division()
    {
        return $this->belongsTo(Division::class ,'division_id' , 'id');

    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class ,'teacher_id' , 'id');

    }
    public function subject()
    {
        return $this->belongsTo(Subject::class ,'subject_id' , 'id');
        
    }
    
    public function studentAttendances()
    {
        return $this->hasMany(StudentAttendance::class, 'attendence_id');
    }
  
}
