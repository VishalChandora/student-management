<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'term',
        'section',
        'division',
        'email',
        'teacher',
        'subject',
        'date',
        'start_time',
        'end_time',
        'attendance[]',
    ];

}
