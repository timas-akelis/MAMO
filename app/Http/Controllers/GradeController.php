<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$lessons = Lesson::all();
        //return view('lesson.index')->with('lessons', $lessons);

        $grades = Grade::all();
        return view('grade.index')->with('grades', $grades);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Create lesson
        $grade = new Grade;
        $grade->value = $request->input('value');
        $grade->save();

        return redirect('/grade')->with('success', 'Pazymys');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grade = Grade::find($id);
        return view('grade.show')->with('grade', $grade);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grade = Grade::find($id);
        return view('grade.edit')->with('grade', $grade);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Create lesson
        $grade = Grade::find($id);
        $grade->value = $request->input('value');
        $grade->save();

        return redirect('/grade')->with('success', 'Pazymys issaugotas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grade = Grade::find($id);
        $grade->delete();
        return redirect('/grade')->with('success', 'Pazymys panaikintas');
    }
}
