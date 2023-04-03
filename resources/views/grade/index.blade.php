@extends('layouts.app')

@section('content')
    <a href="/grade/create">Sukurti nauja pazymi</a>
    <h1>Pazymiai:</h1>
    @if(count($grades) >= 1)
        @foreach($grades as $grade)
            <div class="well">
                <h3><a href="/grade/{{$grade->id}}">{{$grade->value}}</a></h3>
            </div>
        @endforeach
    @else
        <p>Nerasta pazymiu</p>
    @endif
@endsection