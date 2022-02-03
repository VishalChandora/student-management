<?php

namespace App\Http\Controllers;

use App\Models\MarkControllers;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Term;
use App\Models\Division;
use App\Models\Section;
use App\Models\Mark;
use App\Models\StudentClassroom;


class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('marks.index');
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

        return view('marks.create', compact('terms', 'sections', 'divisions'));
    }

    public function createMark(Request $request)
    {
        $formFields = $request->all();

        $terms = Term::where('id', $request->term)->get();
        $sections = Section::where('id', $request->section)->get();
        $divisions = Division::where('id', $request->division)->get();
        $teachers = Teacher::all();
        $subjects = Subject::all();


        $classroomStudents = StudentClassroom::with('student')->where('term_id', $request->term)->where('section_id', $request->section)->where('division_id', $request->division)->get();
        return view('marks.add', compact('classroomStudents', 'terms', 'sections', 'divisions', 'teachers', 'subjects'));
    }

    public function storeMark(Request $request)
    {
        // validation
        $request->validate([
            'term' => 'required',
            'section' => 'required',
            'division' => 'required',
            'teacher' => 'required',
            'subject' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        dd($request);
        // 'ce1_marks' => 'required|array',

        // insert into Attendance
        $mark = Mark::create([
            'term_id' => $request->input('term'),
            'section_id' => $request->input('section'),
            'division_id' => $request->input('division'),
            'teacher_id' => $request->input('teacher'),
            'subject_id' => $request->input('subject'),
            'exam_date' => $request->input('date'),
            'exam_start_time' => $request->input('start_time'),
            'exam_end_time' => $request->input('end_time')
        ]);


        return redirect()->route('marks.create')->with('success', 'Marks added successfully!');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MarkAttendance  $markAttendance
     * @return \Illuminate\Http\Response
     */
    public function show(MarkController $markAttendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MarkController  $markAttendance
     * @return \Illuminate\Http\Response
     */

    public function edit(MarkController $markAttendance)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MarkController  $markAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarkController $markAttendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MarkController  $markAttendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarkController $markAttendance)
    {
        //
    }
}
