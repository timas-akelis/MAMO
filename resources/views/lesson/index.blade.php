@extends('layouts.app')

@section('content')
    <h1>lesson</h1>
    @if(count($lessons) > 1)
        @foreach($lessons as $lesson)
            <div class="well">
                <h3><a href="/lesson/{{$lesson->id}}">{{$lesson->comment}}</a></h3>
                <small>{{$lesson->homework}}</small>
            </div>
        @endforeach
    @else
        <p>No post found</p>
    @endif
@endsection