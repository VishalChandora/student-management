<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    function search(Request $request)
    {
        if(isset($_GET['search'])){
            $search_text = $_GET['search'];
            $students = DB::table('students')->where('email','LIKE','%'.$search_text.'%')->paginate(8);
            return view('search',['students'=>$students]);
        }else{
            return view('students.search');
        }
    }
}
