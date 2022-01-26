@extends('layouts.admin')

@section('content')
<div class="container">
    <section class="content-header">
        <div class="row">
            <div class="col-12">
                <h2>Teacher</h2>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12 mb-2 text-end">
                <a href="#" class="btn btn-success">Create Teacher</a> 
            </div>
            <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
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
                            @foreach($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->id }}</td>
                                <td>{{ $teacher->first_name }}</td>
                                <td>{{ $teacher->last_name }}</td>
                                <td>{{ $teacher->gender }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->mobile }}</td>
                                <td>{{ $teacher->created_at }}</td>
                                <td>
                                <a href="#" class="btn btn-warning">Show</a>
                                <a href="#" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> 
        </div>
    </section>
</div>
@endSection