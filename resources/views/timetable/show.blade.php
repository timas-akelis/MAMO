@extends('layouts.app')

@section('content')
    <a href="/timetable" class="btn btn-default">Grizti</a>
    <h1>Tvarkarascio informacija</h1>
    <div class="well">
        <h4>Tvarkarascio metai: {{$timetable->year}}</h4>
    </div>
    <hr>
    <a href="/timetable/{{$timetable->id}}/edit" class="btn btn-default">Keisti informacija</a>

    {!!Form::open(['action' => ['\App\Http\Controllers\TimetableController@destroy', $timetable->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Istrinti', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection