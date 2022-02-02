<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $students = Student::paginate(9);
        return view('students.index', compact('students'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'email' => 'required|unique:teachers',
            'mobile' => 'required|max:15',
            'password' => 'required',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        try {
            Student::create($validated);

            return redirect()->route('students.index')->with('success', 'Student created successfully!');
        } catch (Exception $e) {
            throw $e;
        }
    }


    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            //where
            dd($search);
            $students = Student::where('email', 'LIKE', "%$search%")->orwhere('first_name', 'LIKE', "%$search%")->orwhere('last_name', 'LIKE', "%$search%")->get();
        }else{
            $students = Student::paginate(9);
        }
        
        return view('students.search', compact('students','search'));
     }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

}
