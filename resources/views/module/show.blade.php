@extends('layouts.app')

@section('content')
    <a href="/module" class="btn btn-default">Go back</a>
    <h1>Module information</h1>
    <div class="well">
        <h4>Module title: {{$module->title}}</h4>
        <h4>Amount of module hours in a week: {{$module->hours}}</h4>
    </div>
    <hr>
    <h4>Module lessons: </h4>
    @foreach ($module->lessons as $lesson)
        <h5>{{$lesson->time}}</h5>
        <h5>{{$lesson->homework}}</h5>
    @endforeach
    <hr>
    <a href="/module/{{$module->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['\App\Http\Controllers\ModuleController@destroy', $module->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection