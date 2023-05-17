@extends('layouts.app')

@section('content')
    <a href="/lesson/create">Create a new lesson</a>
    <h1>Lessons:</h1>
    @if(count($lessons) >= 1)
        @foreach($lessons as $lesson)
            <div class="well">
                <h3><a href="/lesson/{{$lesson->id}}">{{$lesson->time}}</a></h3>
                <small>{{$lesson->comment}}</small>
            </div>
        @endforeach
    @else
        <p>No lessons found</p>
    @endif
@endsection