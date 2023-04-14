@extends('layouts.app')

@section('content')
    <h1>Sukurti nauja laiska</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\MailController@store', 'method' => 'POST']) !!}
        <div class="formGroup">
            {{Form::label('text', 'Laisko tekstas:')}}
            {{Form::textarea('text', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        {{Form::submit('Pateikti', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection