@extends('layouts.app')

@section('content')
    <a href="/module/create">Create a new module</a>
    <h1>Modules:</h1>
    @if(count($modules) >= 1)
        @foreach($modules as $module)
            <div class="well">
                <h3><a href="/module/{{$module->id}}">{{$module->title}}</a></h3>
            </div>
        @endforeach
    @else
        <p>No module found</p>
    @endif
@endsection