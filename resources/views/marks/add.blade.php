@extends('layouts.admin')

@section('content')

<div class="container">
    <section class="content-header">
        <div class="row">
            <div class="col-12">
                <h2>Marks</h2>
                <hr>
            </div>
        </div>
    </section>
    <section class="content">

        @if (Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        @if (Session::get('fail'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('fail') }}
        </div>
        @endif
        <form method="post" action="{{ route('admin.student-marks.store') }}">
            @csrf
            <div class="row justify-content-center">
                <div class="mb-3 col-3">
                    <label for="term" class="form-label">Term </label>
                    <select class="form-select @error('id') is-invalid @enderror" name="term" id="term" aria-label="Default select example" required="true">
                        @foreach($terms as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                    @error('id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3 col-3">
                    <label for="section" class="form-label">Section </label>
                    <select class="form-select @error('id') is-invalid @enderror" name="section" id="section" aria-label="Default select example">
                        @foreach($sections as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                    @error('id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3 col-3">
                    <label for="division" class="form-label">Division </label>
                    <select class="form-select @error('id') is-invalid @enderror" name="division" id="division" aria-label="Default select example">
                        @foreach($divisions as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                    @error('id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="mb-3 col-9">
                    <label for="teachers" class="form-label">Teacher </label>

                    <select class="form-select @error('id') is-invalid @enderror" name="teacher" id="teacher" aria-label="Default select example">
                        <option hidden>Select teacher Name</option>
                        @foreach($teachers as $row)
                        <option value="{{$row->id}}">{{$row->first_name}} {{$row->last_name}}</option>
                        @endforeach
                    </select>
                    @error('id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="mb-3 col-9">
                    <label for="subject" class="form-label">Subject </label>

                    <select class="form-select @error('id') is-invalid @enderror" name="subject" id="subject" aria-label="Default select example">
                        <option hidden>Select Subject</option>
                        @foreach($subjects as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                    @error('id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group mb-3 col-3">
                    <label for="date" class="form-label" Required>Exam Date </label>
                    <input type="date" class="form-control" name="date" id="date" placeholder="Pick A Date">
                    @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-group mb-3 col-3">
                    <label for="start_time" class="form-label" Required>Exam Started </label>
                    <input type="time" class="form-control" name="start_time" id="start_time">
                    @error('slot_start_time') <div class="invalid-feedback">{{ $message }}</div> @enderror

                </div>

                <div class="form-group mb-3 col-3">
                    <label for="end_time" class="form-label" Required>Exam Ended </label>
                    <input type="time" class="form-control" name="end_time" id="end_time">
                    @error('slot_end_time') <div class="invalid-feedback">{{ $message }}</div> @enderror

                </div>
            </div>
            <hr>
            <div class="col-12">
                <table class="table table-bordered">
                    <thead >
                        <tr style="text-align:center">
                            <th>Roll No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th >Marks</th>
                        </tr>
                    </thead>
                    @foreach($classroomStudents as $row)
                    <tr style="text-align:center">
                        <td>{{ $row->roll_no }}</td>
                        <td>{{ $row->student->first_name }}</td>
                        <td>{{ $row->student->last_name }}</td>
                        <td>{{ $row->student->gender }}</td>
                        <td>
                        <input type="text" style="text-align:center" name="ce1_marks" id="ce1_marks" value="" class="" placeholder="Enter CE-1 Mark">
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                <div class="col-11 mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
</div>
</form>
</section>
</div>
@endSection