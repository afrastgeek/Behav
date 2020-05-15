<?php

namespace App\Http\Controllers;

use App\Behavior;
use Illuminate\Http\Request;

class BehaviorController extends Controller
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
        $behaviors = Behavior::paginate(10);

        return view('behaviors.index', compact('behaviors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('behaviors.create');
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
            'activity' => 'required|string|max:255',
            'point' => 'required|integer',
        ]);

        Behavior::create($request->all());

        return redirect('behaviors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function show(Behavior $behavior)
    {
        return view('behaviors.show', compact('behavior'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function edit(Behavior $behavior)
    {
        return view('behaviors.edit', compact('behavior'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Behavior $behavior)
    {
        $request->validate([
            'activity' => 'required|string|max:255',
            'point' => 'required|integer',
        ]);

        $behavior->fill($request->all())->save();

        return redirect()->route('behaviors.show', $behavior->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Behavior  $behavior
     * @return \Illuminate\Http\Response
     */
    public function destroy(Behavior $behavior)
    {
        $behavior->delete();

        return redirect('behaviors');
    }
}
