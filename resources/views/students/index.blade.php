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
        <form action="" type="GET">
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
                        @foreach($students as $student)
                        <tr style="text-align:center">
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->mobile }}</td>
                            <td>{{ $student->created_at }}</td>
                            <td>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mb-2">
                    {{$students->links()}}
                </div>
            </div>
        </div>

    </section>
</div>
@endSection