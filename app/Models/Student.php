<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'mobile',
        'password',
    ];

    public function studentClassrooms() {
        return $this->hasMany(StudentClassroom::class);
    }
    
}
