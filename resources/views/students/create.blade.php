@extends('layouts.admin')

@section('content')
<div class="container">
    <section class="content-header">
        <div class="row">
            <div class="col-12">
                <h2>Student</h2>
            </div>
        </div>
    </section>
    <section class="content">

        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" class="form-control @error('first_name') is-invalid @enderror">
                        @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}" class="form-control @error('last_name') is-invalid @enderror">
                        @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-select @error('gender') is-invalid @enderror">
                            <option value="male" @if(old('gender') == 'male') selected @endif>Male</option>
                            <option value="female" @if(old('gender') == 'female') selected @endif>Female</option>
                        </select>
                        @error('gender') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', '') }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Mobile</label>
                        <input type="number" name="mobile" value="{{ old('mobile', '') }}" class="form-control @error('mobile') is-invalid @enderror">
                        @error('mobile') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>


            </div>
        </div>

    </section>

</div>

@endSection