@extends('layouts.app')

@section('content')
    <h1>Sukurti nauja grupe</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\GroupController@store', 'method' => 'POST']) !!}
        <div class="formGroup">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Grupe'])}}
        </div>
        
        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection