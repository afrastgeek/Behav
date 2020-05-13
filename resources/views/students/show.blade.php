@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mb-4">Students</h1>
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <table class="table mb-0">
                        <tr>
                            <th class="border-top-0">Student ID Number</th>
                            <td class="border-top-0" scope="col" >{{ $student->student_id_number }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td scope="col">{{ $student->name }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <a
                        tabindex="-1"
                        href="{{ route('students.destroy', $student->id) }}"
                        data-method="delete"
                        data-token="{{ csrf_token() }}"
                        data-confirm="Are you sure you want to delete this student?"
                        class="text-danger mr-3">
                        Delete Student
                    </a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary" role="button">Edit Student</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
