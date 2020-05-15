@extends('layouts.app')

@section('title', "Student: $student->name")

@section('content')
<div class="col">
    <h1 class="mb-4">
        <span class="text-primary"><a href="{{ route('students.index') }}">Students</a> /</span>
        {{ $student->name }}
    </h1>
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
                <tr>
                    <th>Points</th>
                    <td scope="col">{{ $student->points }}</td>
                </tr>
            </table>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
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
    <h2 class="mt-5 mb-3">
        Activities
    </h2>
    <div class="card border-0 shadow-sm mb-4">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th class="border-top-0" scope="col">No.</th>
                    <th class="border-top-0" scope="col">Activity</th>
                    <th class="border-top-0" scope="col">Point</th>
                    <th class="border-top-0" scope="col">Committed At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($student->behaviors as $behavior)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $behavior->activity }}</td>
                        <td scope="row">{{ $behavior->point }}</td>
                        <td>{{ $behavior->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center" scope="row">No data available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
