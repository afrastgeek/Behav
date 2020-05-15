@extends('layouts.app')

@section('title', "Behavior: $behavior->activity")

@section('content')
<div class="row">
    <div class="col">
        <h1 class="mb-4">
            <span class="text-primary"><a href="{{ route('behaviors.index') }}">Behaviors</a> /</span>
            {{ $behavior->activity }}
        </h1>
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <table class="table mb-0">
                    <tr>
                        <th class="border-top-0">Activity</th>
                        <td class="border-top-0" scope="col" >{{ $behavior->activity }}</td>
                    </tr>
                    <tr>
                        <th>Point</th>
                        <td scope="col">{{ $behavior->point }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a
                    tabindex="-1"
                    href="{{ route('behaviors.destroy', $behavior->id) }}"
                    data-method="delete"
                    data-token="{{ csrf_token() }}"
                    data-confirm="Are you sure you want to delete this behavior?"
                    class="text-danger mr-3">
                    Delete Behavior
                </a>
                <a href="{{ route('behaviors.edit', $behavior->id) }}" class="btn btn-primary" role="button">Edit Behavior</a>
            </div>
        </div>
    </div>
</div>
@endsection
