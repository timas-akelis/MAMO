@extends('layouts.app')

@section('content')
    <h1>Edit a module</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\GroupController@update', $group->id], 'method' => 'POST']) !!}
        <div class="formGroup">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $group->title, ['class' => 'form-control', 'placeholder' => 'Grupe'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection