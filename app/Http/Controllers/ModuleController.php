<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::all();
        return view('module.index')->with('modules', $modules);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'hours' => 'required'
        ]);

        $module = new Module;
        $module->title = $request->input('title');
        $module->hours = $request->input('hours');
        $module->save();

        return redirect('/module')->with('success', 'Module created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $module = Module::find($id);
        return view('module.show')->with('module', $module);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $module = Module::find($id);
        return view('module.edit')->with('module', $module);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'hours' => 'required'
        ]);

        $module = Module::find($id);
        $module->title = $request->input('title');
        $module->hours = $request->input('hours');
        $module->save();

        return redirect('/module')->with('success', 'Module created');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $module = Module::find($id);
        $module->delete();
        return redirect('/module')->with('success', 'Module removed');
    }
}
