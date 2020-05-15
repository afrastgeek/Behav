@extends('layouts.app')

@section('title', 'Create Behavior')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="mb-4">
            <span class="text-primary"><a href="{{ route('behaviors.index') }}">Behaviors</a> /</span>
            Create
        </h1>

        @include('shared.errors')

        <div class="card border-0 shadow-sm">
            <form action="{{ route('behaviors.store') }}" method="post">
                @csrf
                <div class="card-body">
                        <div class="form-group">
                            <label for="inputActivity">Activity</label>
                            <input type="text" class="form-control" id="inputActivity" name="activity" value="{{ old('activity') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPoint">Point</label>
                            <input type="number" class="form-control" id="inputPoint" name="point" value="{{ old('point') }}" required>
                        </div>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" class="btn btn-primary" value="Create Behavior" role="button">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
