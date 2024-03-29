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
        <form action="" type="GET">
            <div class="row">
                <div class="form-group col-5 mb-2">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Select date" value="">
                </div>
                <div class="col-2 mb-2">
                    <button class="btn btn-primary"><span data-feather="search"></span>Search</button>
                </div>
                <div class="col-5 mb-2 text-end">
                    <a href="{{route('attendances.create')}}" class="btn btn-success">Add Attendances</a>
                </div>
            </div>
        </form>

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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attendances as $attendance)
                        <tr style="text-align:center">
                            <td>{{ $attendance->id }}</td>
                            <td>{{ $attendance->term->name}}</td>
                            <td>{{ $attendance->section->name }}</td>
                            <td>{{ $attendance->division->name }}</td>
                            <td>{{ $attendance->subject->name }}</td>
                            <td>{{ $attendance->date }}</td>
                            <td>{{ $attendance->slot_start_time }} - {{ $attendance->slot_end_time }}</td>
                            <td>
                                <div class="">
                                    <a href="{{route('attendances.show', $attendance->id)}}" class="btn btn-primary">View</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mb-2">
                    {{$attendances->links()}}
                </div>

            </div>
        </div>

    </section>
</div>
@endSection