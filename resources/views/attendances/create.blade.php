@extends('layouts.admin')

@section('content')
<div class="container">
    <section class="content-header">
        <div class="row">
            <div class="col-12">
                <h2>Attendance</h2>
                <hr>
            </div>
        </div>
    </section>
    <section class="content">

        
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form action="{{ route('admin.student-attendances.create') }}" method="get">
                    @csrf
                    
                    <div class="row justify-content-center">
                        <div class="mb-3 col-3">
                        <label for="term" class="form-label">Term </label>
                            <select class="form-select @error('name') is-invalid @enderror"  name="term" id="term" aria-label="Default select example" required="true">
                            <option  hidden value="Select Term" selected>select Term</option>    
                            @foreach($terms as $row)
                                <option  value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </select>
                        @error('id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="mb-3 col-3">
                        <label for="section" class="form-label" >Section </label>
                            <select class="form-select @error('name') is-invalid @enderror" name="section" id="section"  aria-label="Default select example">
                            <option  hidden value="Select Section" selected>select Section</option>    
                            @foreach($sections as $row)
                                <option  value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach 
                            </select>               
                        @error('id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="mb-3 col-3">
                            <label for="division" class="form-label">Division </label>
                            <select class="form-select @error('name') is-invalid @enderror" name="division" id="division"  aria-label="Default select example">
                             <option  hidden value="Select Division" selected>select Division</option>
                                @foreach($divisions as $row)
                                <option  value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach       
                            </select>
                            @error('id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="mb-3 col-1 ">
                            <button type="submit" class="btn btn-primary ">Search</button>
                        </div>
                    </div>
                </form>
    </section>
</div>
@endSection