@extends('layouts.app')

@section('title', 'Track Student Activity')

@section('content')
<div class="col">
    <h1 class="mb-4">
        Track Student Activity
    </h1>

    @include('shared.errors')

    <div class="card border-0 shadow-sm">
        <form action="{{ route('activities.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="selectStudent">Student</label>
                    <select class="form-control" id="selectStudent" name="student_id">
                        <option></option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="selectBehavior">Behavior</label>
                    <select class="form-control" id="selectBehavior" name="behavior_id">
                        <option></option>
                        @foreach ($behaviors as $behavior)
                            <option value="{{ $behavior->id }}">{{ $behavior->activity }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer text-right">
                <input type="submit" class="btn btn-primary" value="Create Behavior" role="button">
            </div>
        </form>
    </div>
</div>
@endsection
