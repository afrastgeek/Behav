@extends('layouts.app')

@section('title', 'Create Student')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="mb-4">
            <span class="text-primary"><a href="{{ route('students.index') }}">Students</a> /</span>
            Create
        </h1>

        @include('shared.errors')

        <div class="card border-0 shadow-sm">
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <div class="card-body">
                        <div class="form-group">
                            <label for="inputStudentIdNumber">Student ID Number</label>
                            <input type="number" class="form-control" id="inputStudentIdNumber" name="student_id_number" value="{{ old('student_id_number') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" name="name" value="{{ old('name') }}" required>
                        </div>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" class="btn btn-primary" value="Create Student" role="button">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
