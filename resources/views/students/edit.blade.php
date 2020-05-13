@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mb-4">Students</h1>

            @include('shared.errors')

            <div class="card border-0 shadow-sm">
                <form action="{{ route('students.update', $student->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                            <div class="form-group">
                                <label for="inputStudentIdNumber">Student ID Number</label>
                                <input type="number" class="form-control" id="inputStudentIdNumber" name="student_id_number" value="{{ $student->student_id_number }}" required>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" name="name" value="{{ $student->name }}" required>
                            </div>
                    </div>
                    <div class="card-footer text-right">
                        <input type="submit" class="btn btn-primary" role="button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
