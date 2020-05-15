<?php

namespace App\Http\Controllers;

use App\Student;
use App\Activity;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::paginate(10);

        return view('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::orderBy('name')->get();
        $behaviors = Behavior::orderBy('activity')->get();

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
            'commited_at' => 'required|date',
        ]);

        $behavior = Behavior::find($request->behavior_id);
        $student = Student::find($request->student_id);

        // Store commited behavior in pivot table
        $student->behaviors()->attach([
            $request->behavior_id => ['commited_at' => $request->commited_at]
        ]);

        // Calculate student points
        $student->points += $behavior->point;
        $student->save();

        return redirect()->route('students.show', $request->student_id);
    }
}
