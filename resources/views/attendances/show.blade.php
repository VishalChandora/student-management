@extends('layouts.admin')

@section('content')
<div class="container">
    <section class="content-header">
        <div class="row">
            <div class="col-12">
                <h2>Student Attendance</h2>
                <hr>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr style="text-align:center">
                            <th>Id</th>
                            <th>Term</th>
                            <th>Section</th>
                            <th>Division</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Lecture Timing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="text-align:center">
                            <td>{{ $attendance->id }}</td>
                            <td>{{ $attendance->term->name}}</td>
                            <td>{{ $attendance->section->name }}</td>
                            <td>{{ $attendance->division->name }}</td>
                            <td>{{ $attendance->subject->name }}</td>
                            <td>{{ $attendance->date }}</td>
                            <td>{{ $attendance->slot_start_time }} - {{ $attendance->slot_end_time }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-align:center">
                                <th>Roll No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Attendance</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            @foreach($attendance->studentAttendances as $studentAttendance)
                            <tr>
                                <td>{{ $studentAttendance->studentClassroom->roll_no }}</td>
                                <td>{{ $studentAttendance->studentClassroom->student->first_name }}</td>
                                <td>{{ $studentAttendance->studentClassroom->student->last_name }}</td>
                                <td>{{ $studentAttendance->studentClassroom->student->gender }}</td>
                                <td>@if($studentAttendance->is_present)  
                                        <span class="font-monospace text-success">Present</span>
                                    @else
                                        <span class="font-monospace text-danger">Absent</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </section>
</div>
@endSection