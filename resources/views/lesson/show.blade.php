@extends('layouts.app')

@section('content')
    <a href="/lesson" class="btn btn-default">Go back</a>
    <h1>Lesson information</h1>
    <div class="well">
        <h4>Modulis: {{$moduleLesson->title}}</h4>
        <h4>Kabinetas: {{$roomLesson->location}}</h4>
        <h4>Pamokos laikas: {{$lesson->time}}</h4>
        <h4>Komentaras: {{$lesson->comment}}</h4>
        <h4>Namu darbai: {{$lesson->homework}}</h4>
        <h4>Testas: {{$lesson->test}}</h4>
    </div>
    <hr>
    <a href="/lesson/{{$lesson->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['\App\Http\Controllers\LessonController@destroy', $lesson->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection