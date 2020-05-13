@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mb-4">Students</h1>
            <div class="card border-0 shadow-sm">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="border-top-0" scope="col">No.</th>
                            <th class="border-top-0" scope="col">Student ID Number</th>
                            <th class="border-top-0" scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->student_id_number }}</td>
                                <td scope="row">{{ $student->name }}</td>
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
    </div>
</div>
@endsection
