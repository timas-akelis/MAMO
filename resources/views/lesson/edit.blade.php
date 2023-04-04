@extends('layouts.app')

@section('content')
    <h1>Edit a lesson</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\LessonController@update', $lesson->id], 'method' => 'POST']) !!}
        @csrf
        <label for="module_id">Module:</label>
        <select name="module_id" id="module_id">
            @foreach($modules as $module)
                <option value="{{ $module->id }}">{{ $module->title }}</option>
            @endforeach
        </select>
        @csrf
        <label for="room_id">Room:</label>
        <select name="room_id" id="room_id">
            @foreach($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->location }}</option>
            @endforeach
        </select>
        <div class="formGroup">
            {{Form::label('date', 'Date of the lesson:')}}
            {{Form::date('date', \Carbon\Carbon::now())}}
        </div>
        <div class="formGroup">
            <label for="time">Starting time of the lesson:</label>
            <input type="time" id="time" name="time"> 
        </div>
        <div class="formGroup">
            {{Form::label('comment', 'Comment')}}
            {{Form::textarea('comment', $lesson->comment, ['class' => 'form-control', 'placeholder' => 'Comment'])}}
        </div>
        <div class="formGroup">
            {{Form::label('homework', 'Homework')}}
            {{Form::textarea('homework', $lesson->homework, ['class' => 'form-control', 'placeholder' => 'Homework'])}}
        </div>
        <div class="formGroup">
            {{Form::label('test', 'Test information')}}
            {{Form::text('test', $lesson->test, ['class' => 'form-control', 'placeholder' => 'Test'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
    {!! Form::close() !!}
@endsection