@extends('layouts.app')

@section('title', "Behavior: $behavior->activity (Edit)")

@section('content')
<div class="col">
    <h1 class="mb-4">
        <span class="text-primary"><a href="{{ route('behaviors.index') }}">Behaviors</a> /</span>
        {{ $behavior->activity }}
    </h1>

    @include('shared.errors')

    <div class="card border-0 shadow-sm">
        <form action="{{ route('behaviors.update', $behavior->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">
                    <div class="form-group">
                        <label for="inputActivity">Activity</label>
                        <input type="text" class="form-control" id="inputActivity" name="activity" value="{{ $behavior->activity }}" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPoint">Point</label>
                        <input type="number" class="form-control" id="inputPoint" name="point" value="{{ $behavior->point }}" required>
                    </div>
            </div>
            <div class="card-footer text-right">
                <input type="submit" class="btn btn-primary" value="Edit Behavior" role="button">
            </div>
        </form>
    </div>
</div>
@endsection