<?php

namespace App\Http\Controllers;

use App\Student;
use App\Behavior;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $behaviors = Behavior::all();

        return view('activities.create', compact('students', 'behaviors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'behavior_id' => 'required|integer|exists:App\Behavior,id',
            'student_id' => 'required|integer|exists:App\Student,id',
        ]);

        $behavior = Behavior::find($request->behavior_id);
        $student = Student::find($request->student_id);

        // Store commited behavior in pivot table
        $student->behaviors()->attach($request->behavior_id);

        // Calculate student points
        $student->points += $behavior->point;
        $student->save();

        return redirect()->route('students.show', $request->student_id);
    }
}
