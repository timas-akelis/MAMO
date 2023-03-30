@extends('layouts.app')

@section('content')
    <h1>Create a new module</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\ModuleController@store', 'method' => 'POST']) !!}
        <div class="formGroup">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="formGroup">
            {{Form::label('hours', 'Hours in a week')}}
            {{Form::input('number', 'hours', '', ['class' => 'form-control', 'placeholder' => 'Hours'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection