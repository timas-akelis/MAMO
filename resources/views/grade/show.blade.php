@extends('layouts.app')

@section('content')
    <a href="/grade" class="btn btn-default">Grizti</a>
    <h1>Pazymio informacija</h1>
    <div class="well">
        <h4>Pazymio verte: {{$grade->value}}</h4>
    </div>
    <hr>
    <a href="/grade/{{$grade->id}}/edit" class="btn btn-default">Keisti informacija</a>

    {!!Form::open(['action' => ['\App\Http\Controllers\GradeController@destroy', $grade->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Istrinti', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection