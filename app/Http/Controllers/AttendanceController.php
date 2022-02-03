<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\Division;
use App\Models\Section;
use App\Models\StudentAttendance;
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
        $attendances = Attendance::with(['term','section','division','teacher','subject'])->paginate(13);
        return view('attendances.index',compact('attendances'));
    }

    public function createAttendance(Request $request)
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

    public function storeAttendance(Request $request)
    {
       

        // validation
        $request->validate([
            'term' => 'required',
            'section' => 'required',
            'division' => 'required',
            'teacher' => 'required',
            'subject' => 'required',
            'date' => 'required',
            'start_time'=> 'required',
            'end_time'=> 'required',
            'attendances' => 'required|array',
        ]); 
        // DB Trasaction

        // insert into Attendance
           $attendance = Attendance::create([            
            'term_id'=>$request->input('term'),
            'section_id'=>$request->input('section'),  
            'division_id'=>$request->input('division'),
            'teacher_id'=>$request->input('teacher'),
            'subject_id'=>$request->input('subject'),
            'date'=>$request->input('date'),
            'slot_start_time'=>$request->input('start_time'),
            'slot_end_time'=>$request->input('end_time')
            ]);
        // empty array studentAttendances
        
        foreach($request->attendances as $id=> $value){
            StudentAttendance::create([
                'student_classroom_id'=>$id,
                'attendence_id'=>$attendance->id,
                'is_present'=>$value === 'present' ? true:false
            ]);
        } 

        
            // studentAttendances -> student_classroom_id (key), attendence_id, is_present (value === present ? true : false)
            // array push

            // StudentAttendance :: create --> studentAttendances
        // redirect to success
        return redirect()->route('attendances.create')->with('success', 'Attendances added successfully!');
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
    public function store()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        return view('attendances.show',compact('attendance'));
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
