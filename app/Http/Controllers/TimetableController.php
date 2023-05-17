<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timetable;
use App\Models\User;
use App\Models\Timeslot;
use App\Models\Lesson;
use App\Models\Rule;
use App\Models\Module;

use Illuminate\Support\Facades\Auth;


class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$lessons = Lesson::all();
        //return view('lesson.index')->with('lessons', $lessons);

        $timetables = Timetable::where("school_id", Auth::user()->school_id)->get();
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
        $teachers = User::where('school_id', Auth::user()->school_id)
                        ->where('role', 1)
                        ->get();

        $timeslots = Timeslot::where('school_id', Auth::user()->school_id)->get();

        $modules = Module::join('users', 'modules.user_id', '=', 'users.id')
                         ->where('users.school_id', Auth::user()->school_id)
                         ->get();

        $rules = Rule::where('school_id', Auth::user()->school_id)->get();

        //Create timetable
        $timetable = new Timetable;
        $timetable->year = $request->input('year');
        $timetable->school_id = Auth::user()->school_id;
        $timetable->save();

        $Matrix = [];
        for ($i = 0; $i < count($teachers); $i++){
            $teachersWeek = [];
            for ($j = 0; $j < count($timeslots)*5; $j++){
                array_push($teachersWeek, "-1");
            }
            array_push($Matrix, $teachersWeek);
        }

        

        return redirect('/timetable')->with('success', "Sukurta sėkmingai");
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
