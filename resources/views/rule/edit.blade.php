@extends('layouts.app')

@section('content')
    <h1>Keisti taisykles informacija</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\RuleController@update', $rule->id], 'method' => 'POST']) !!}
        <div class="formGroup">
            {{Form::label('dateFrom', 'Taisykles galiojimo pradzia')}}
            {{Form::date('dateFrom', \Carbon\Carbon::now())}}
        </div>
        <div class="formGroup">
            {{Form::label('dateTo', 'Taisykles galiojimo pabaiga')}}
            {{Form::date('dateTo', \Carbon\Carbon::now())}}
        </div>
        <div class="formGroup">
            {{Form::label('restriction', 'Ribojimas')}}
            {{Form::text('restriction', $rule->restriction, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Pateikti', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection