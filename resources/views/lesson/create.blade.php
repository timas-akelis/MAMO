@extends('layouts.app')

@section('content')
    <h1>Create a new lesson</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\LessonController@store', 'method' => 'POST']) !!}
        <div class="formGroup">
            {{Form::label('date', 'Date of the lesson:')}}
            {{Form::date('date', \Carbon\Carbon::now())}}
        </div>
        <div class="formGroup">
            <label for="time">Starting time of the lesson:</label>
            <input type="time" id="time" name="time"> 
        </div>
        <div class="formGroup">
            {{Form::label('comment', 'Comment')}}
            {{Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Comment'])}}
        </div>
        <div class="formGroup">
            {{Form::label('homework', 'Homework')}}
            {{Form::textarea('homework', '', ['class' => 'form-control', 'placeholder' => 'Homework'])}}
        </div>
        <div class="formGroup">
            {{Form::label('test', 'Test information')}}
            {{Form::text('test', '', ['class' => 'form-control', 'placeholder' => 'Test'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection