<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timeslot;
use Ramsey\Uuid\Type\Time;
use Illuminate\Support\Facades\Auth;

class TimeslotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timeslots = Timeslot::where('school_id', Auth::user()->school_id)->get();
        return view('timeslot.index')->with('timeslots', $timeslots);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('timeslot.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Create lesson
        $timeslot = new Timeslot;
        $timeslot->slot = $request->input('slot');
        $timeslot->start = $request->input('start');
        $timeslot->length = $request->input('length');
        $timeslot->school_id = Auth::user()->school_id;
        $timeslot->save();

        return redirect('/timeslot')->with('success', 'Pamokos laikas uzregistruotas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $timeslot = Timeslot::find($id);
        return view('timeslot.show')->with('timeslot', $timeslot);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $timeslot = Timeslot::find($id);
        return view('timeslot.edit')->with('timeslot', $timeslot);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Create lesson
        $timeslot = Timeslot::find($id);
        $timeslot->slot = $request->input('slot');
        $timeslot->start = $request->input('start');
        $timeslot->length = $request->input('length');
        $timeslot->save();

        return redirect('/timeslot')->with('success', 'Pamokos laikas uzregistruotas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $timeslot = Timeslot::find($id);
        $timeslot->delete();
        return redirect('/timeslot')->with('success', 'Pamokos laikas panaikintas');
    }
}
