@extends('layouts.app')

@section('content')
    <a href="/timeslot/create">Uzregistruoti nauja pamokos laika</a>
    <h1>Pamokos laikai:</h1>
    @if(count($timeslots) >= 1)
        @foreach($timeslots as $timeslot)
            <div class="well">
                <h3><a href="/timeslot/{{$timeslot->id}}">{{$timeslot->start}}</a></h3>
            </div>
        @endforeach
    @else
        <p>Nerasta pamokos laiku</p>
    @endif
@endsection