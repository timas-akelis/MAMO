@extends('layouts.app')

@section('content')
    <a href="/lesson" class="btn btn-default">Go back</a>
    <h1>Lesson information</h1>
    <div class="well">
        <h4>{{$lesson->time}}</h4>
        <h4>{{$lesson->comment}}</h4>
        <h4>{{$lesson->homework}}</h4>
        <h4>{{$lesson->test}}</h4>
    </div>
@endsection