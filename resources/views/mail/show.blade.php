@extends('layouts.app')

@section('content')
    <a href="/mail" class="btn btn-default">Grizti</a>
    <h1>Laisko informacija</h1>
    <div class="well">
        <h4>{{$mail->text}}</h4>
        <h4>Sukurimo data: {{$mail->created_at}}</h4>
        <h4>Naujuasio pakeitimo data: {{$mail->updated_at}}</h4>
    </div>
    <hr>
    <a href="/mail/{{$mail->id}}/edit" class="btn btn-default">Keisti informacija</a>

    {!!Form::open(['action' => ['\App\Http\Controllers\MailController@destroy', $mail->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Istrinti', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection