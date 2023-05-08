@extends('layouts.app')

@section('content')
    <a href="/rule/create">Sukurti nauja taisykle</a>
    <h1>Taisykliu archyvas:</h1>
    @if(count($rules) >= 1)
        @foreach($rules as $rule)
            <div class="well">
                <h3><a href="/rule/{{$rule->id}}">{{$rule->userID}}:{{$rule->restriction}}</a></h3>
            </div>
        @endforeach
    @else
        <p>Nerasta taisykliu</p>
    @endif
@endsection