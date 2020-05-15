@extends('layouts.app')

@section('title', 'Activities')

@section('content')
<div class="col">
    <h1 class="mb-4">Activities</h1>
    <div class="card border-0 shadow-sm mb-4">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th class="border-top-0" scope="col">No.</th>
                    <th class="border-top-0" scope="col">Student</th>
                    <th class="border-top-0" scope="col">Behavior</th>
                    <th class="border-top-0" scope="col">Commited At</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($activities as $activity)
                    <tr style="transform: rotate(0);">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $activity->student->name }}</td>
                        <td scope="row">{{ $activity->behavior->activity }}</td>
                        <td>{{ $activity->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center" scope="row">No data available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $activities->links() }}
</div>
@endsection
