@extends('layouts.app')

@section('content')
    <h1>Keisti kabineto duomenis</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\RoomController@update', $room->id], 'method' => 'POST']) !!}
        <div class="formGroup">
            {{Form::label('location', 'Title')}}
            {{Form::text('location', $room->location, ['class' => 'form-control', 'placeholder' => 'Grupe'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection