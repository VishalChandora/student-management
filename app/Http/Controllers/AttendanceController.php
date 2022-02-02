<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\Division;
use App\Models\Section;
use App\Models\StudentClassroom;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Term;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function addAttendance(Request $request)
    {
        $formFields = $request->all();

        $terms = Term::where('id', $request->term)->get();
        $sections = Section::where('id', $request->section)->get();
        $divisions = Division::where('id', $request->division)->get();
        $teachers = Teacher::all();
        $subjects = Subject::all();


        $classroomStudents = StudentClassroom::with('student')->where('term_id',$request->term)->where('section_id',$request->section)->where('division_id',$request->division)->get();
        return view('attendances.add', compact('classroomStudents', 'terms', 'sections', 'divisions', 'teachers', 'subjects'));   
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terms = Term::current()->get();
        $sections = Section::all();
        $divisions = Division::all();
        $teachers = Teacher::all();
        $subjects = Subject::all();

        return view('attendances.create', compact('terms', 'sections', 'divisions'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'term' => 'required|max:255',
            'section' => 'required|max:255',
            'division' => 'required|in:A,B',
            'teacher' => 'required|max:255',
            'subject' => 'required|max:255',
            'date' => 'required',
            'start_time'=> 'required',
            'end_time'=> 'required',
            'attendances' => 'required|array',
        ]); 

        $query = DB::table('attendances')->insert([
            'term'=>$request->input('term_id'),
            'section'=>$request->input('section_id'),
            'division'=>$request->input('division_id'),
            'teacher'=>$request->input('teacher_id'),
            'subject'=>$request->input('subject_id'),
            'date'=>$request->input('date'),
            'start_time'=>$request->input('slot_start_time'),
            'end_time'=>$request->input('slot_end_time'),
        ]);

        if($query){
            return redirect()->route('attendances.create')->with('success', 'Attendance Added successfully!');
            
        }else{
            return back()->with('fail','something went wrong');
        }
 
        // return $request->input();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
