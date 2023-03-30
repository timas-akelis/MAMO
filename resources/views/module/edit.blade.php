@extends('layouts.app')

@section('content')
    <h1>Edit a module</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\ModuleController@update', $module->id], 'method' => 'POST']) !!}
        <div class="formGroup">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $module->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="formGroup">
            {{Form::label('hours', 'Hours in a week')}}
            {{Form::input('number', 'hours', $module->hours, ['class' => 'form-control', 'placeholder' => 'Hours'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection