<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$lessons = Lesson::all();
        //return view('lesson.index')->with('lessons', $lessons);

        $rooms = Room::all();
        return view('room.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Create lesson
        $room = new Room;
        $room->location = $request->input('location');
        $room->save();

        return redirect('/room')->with('success', 'Room');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $room = Room::find($id);
        return view('room.show')->with('room', $room);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = Room::find($id);
        return view('room.edit')->with('room', $room);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Create lesson
        $room = Room::find($id);
        $room->location = $request->input('location');
        $room->save();

        return redirect('/room')->with('success', 'Room updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect('/room')->with('success', 'Room removed');
    }
}
