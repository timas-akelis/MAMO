@extends('layouts.app')

@section('content')
    <a href="/group/create">Sukurti nauja grupe</a>
    <h1>Grupes:</h1>
    @if(count($groups) >= 1)
        @foreach($groups as $group)
            <div class="well">
                <h3><a href="/group/{{$group->id}}">{{$group->title}}</a></h3>
            </div>
        @endforeach
    @else
        <p>Nerasta grupiu</p>
    @endif
@endsection