@extends('layouts.app')

@section('content')
    <h1>Sukurti nauja tvarkarasti</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\TimetableController@store', 'method' => 'POST']) !!}
        <div class="formGroup">
            {{Form::label('year', 'Tvarkarascio metai')}}
            {{Form::date('year', \Carbon\Carbon::now())}}
        </div>
        
        {{Form::submit('Pateikti', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection