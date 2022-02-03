<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    function search(Request $request)
    {
        dd($request)->input();
        if(isset($_GET['search'])){
            $search_text = $_GET['search'];
            $students = Student::where('email','LIKE','%'.$search_text.'%')->get();
            return view('student.create')->with('success', 'Student found successfully!');;
        }else{
            return view('admin.student-search')->with('Fail', 'Student not Found!');;
        }
    }
}
// ,['students'=>$students]
