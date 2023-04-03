<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::all();
        return view('school.index')->with('schools', $schools);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Create lesson
        $school = new School;
        $school->title = $request->input('title');
        $school->address = $request->input('address');
        $school->exists = 0;
        $school->save();

        return redirect('/school')->with('success', 'Mokykla uzregistruota (BE TVARKARASCIO)');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $school = School::find($id);
        return view('school.show')->with('school', $school);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $school = School::find($id);
        return view('school.edit')->with('school', $school);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Create lesson
        $school = School::find($id);
        $school->title = $request->input('title');
        $school->address = $request->input('address');
        $school->exists = 0;
        $school->save();

        return redirect('/school')->with('success', 'Mokykla issaugota (BE TVARKARASCIO)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $school = School::find($id);
        $school->delete();
        return redirect('/school')->with('success', 'Mokykla panaikinta');
    }
}
