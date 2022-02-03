<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['first_name','last_name','email','gender','mobile','created_at'];
}
