@extends('layouts.app')

@section('title', 'Behaviors')

@section('content')
<div class="col">
    <h1 class="mb-4">Behaviors</h1>
    <div class="mb-4">
        <a href="{{ route('behaviors.create') }}" class="btn btn-primary" role="button">Create Behavior</a>
    </div>
    <div class="card border-0 shadow-sm mb-4">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th class="border-top-0" scope="col">No.</th>
                    <th class="border-top-0" scope="col">Activity</th>
                    <th class="border-top-0" scope="col">Point</th>
                    <th class="border-top-0"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($behaviors as $behavior)
                    <tr style="transform: rotate(0);">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $behavior->activity }}</td>
                        <td scope="row">{{ $behavior->point }}</td>
                        <td>
                            <a href="{{ route('behaviors.show', $behavior->id) }}" class="stretched-link">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center" scope="row">No data available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $behaviors->links() }}
</div>
@endsection
