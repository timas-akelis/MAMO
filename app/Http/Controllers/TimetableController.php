<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timetable;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$lessons = Lesson::all();
        //return view('lesson.index')->with('lessons', $lessons);

        $timetables = Timetable::all();
        return view('timetable.index')->with('timetables', $timetables);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('timetable.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Create lesson
        $timetable = new Timetable;
        $timetable->year = $request->input('year');
        $timetable->save();

        return redirect('/timetable')->with('success', 'Tvarkarastis sukurtas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $timetable = Timetable::find($id);
        return view('timetable.show')->with('timetable', $timetable);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $timetable = Timetable::find($id);
        return view('timetable.edit')->with('timetable', $timetable);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Create lesson
        $timetable = Timetable::find($id);
        $timetable->year = $request->input('year');
        $timetable->save();

        return redirect('/timetable')->with('success', 'Tvarkarastis issaugotas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $timetable = Timetable::find($id);
        $timetable->delete();
        return redirect('/timetable')->with('success', 'Tvarkarastis panaikintas');
    }
}
