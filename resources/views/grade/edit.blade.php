@extends('layouts.app')

@section('content')
    <h1>Keisti pazymio informacija</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\GradeController@update', $grade->id], 'method' => 'POST']) !!}
        <div class="formGroup">
            {{Form::label('value', 'value')}}
            {{Form::text('value', $grade->value, ['class' => 'form-control', 'placeholder' => 'Grupe'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Pateikti', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection