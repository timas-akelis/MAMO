@extends('layouts.app')

@section('content')
    <a href="/room" class="btn btn-default">Grizti</a>
    <h1>Grupes informacija</h1>
    <div class="well">
        <h4>Grupes pavadinimas: {{$room->location}}</h4>
    </div>
    <hr>
    <a href="/room/{{$room->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['\App\Http\Controllers\RoomController@destroy', $room->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Istrinti', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection