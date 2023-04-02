@extends('layouts.app')

@section('content')
    <a href="/rule" class="btn btn-default">Grizti</a>
    <h1>Taisykles informacija</h1>
    <div class="well">
        <h4>Taisykles pradzia: {{$rule->dateFrom}}</h4>
        <h4>Taisykles pabaiga: {{$rule->dateTo}}</h4>
        <h4>Taisykles ribojimas: {{$rule->restriction}}</h4>
    </div>
    <hr>
    <a href="/rule/{{$rule->id}}/edit" class="btn btn-default">Keisti informacija</a>

    {!!Form::open(['action' => ['\App\Http\Controllers\RuleController@destroy', $rule->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Istrinti', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection