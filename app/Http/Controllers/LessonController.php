<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\User;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$lessons = Lesson::all();
        //return view('lesson.index')->with('lessons', $lessons);

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('lesson.index')->with('lessons', $user->lessons);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Consider using the laravel-ckeditor for things like bold text
        //7th video end describes how

        $this->validate($request, [
            'time' => 'required',
        ]);

        $date = $request->input('date');
        $time = $request->input('time');

        //Create lesson
        $lesson = new Lesson;
        $lesson->time = date('Y-m-d H:i', strtotime("$date $time"));
        $lesson->comment = $request->input('comment');
        $lesson->homework = $request->input('homework');
        $lesson->test = $request->input('test');
        $lesson->save();

        return redirect('/lesson')->with('success', 'Lesson created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lesson = Lesson::find($id);
        return view('lesson.show')->with('lesson', $lesson);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lesson = Lesson::find($id);
        return view('lesson.edit')->with('lesson', $lesson);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'time' => 'required',
        ]);

        $date = $request->input('date');
        $time = $request->input('time');

        //Create lesson
        $lesson = Lesson::find($id);
        $lesson->time = date('Y-m-d H:i', strtotime("$date $time"));
        $lesson->comment = $request->input('comment');
        $lesson->homework = $request->input('homework');
        $lesson->test = $request->input('test');
        $lesson->save();

        return redirect('/lesson')->with('success', 'Lesson updated (currently overwrites time)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lesson = Lesson::find($id);
        $lesson->delete();
        return redirect('/lesson')->with('success', 'Lesson removed');
    }
}
