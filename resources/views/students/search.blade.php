@extends('layouts.admin')
@section('content')
<div class="container">
    <section class="content-header">
        <div class="row">
            <div class="col-12">
                <h2>Student</h2>
                <hr>
            </div>
        </div>  
    </section>
    <section class="content">
        <form action="{{route('admin.student-search')}}" type="GET">
            <div class="row">
                <div class="form-group col-5 mb-2">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Enter Student Name Or Email Id" value="">
                </div>
                <div class="col-2 mb-2">
                    <button class="btn btn-primary"><span data-feather="search"></span>Search</button>
                </div>
                <div class="col-5 mb-2 text-end">
                    <a href="{{route('students.create')}}" class="btn btn-success">Create Student</a>
                </div>
            </div>
        </form>
@if(isset($students))
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr style="text-align:center">
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($students) > 0)
                            @foreach($students as $student)
                            <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->mobile }}</td>
                            <td>{{ $student->created_at }}</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                            </td>
                            </tr>
                        @else

                        @endif
                    </tbody>
                  
                </table>

            </div>
    </section>
</div>
@endSection