<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'term_id',
        'section_id',
        'division_id',
        'teacher_id',
        'subject_id',
        'exam_date',
        'exam_start_time',
        'exam_end_time',
        
    ];
}
