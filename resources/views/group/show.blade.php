@extends('layouts.app')

@section('content')
    <a href="/group" class="btn btn-default">Grizti</a>
    <h1>Grupes informacija</h1>
    <div class="well">
        <h4>Grupes pavadinimas: {{$group->title}}</h4>
    </div>
    <hr>
    <a href="/group/{{$group->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['\App\Http\Controllers\GroupController@destroy', $group->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Istrinti', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection