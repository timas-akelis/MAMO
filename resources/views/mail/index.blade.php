@extends('layouts.app')

@section('content')
    <a href="/mail/create">Sukurti nauja laiska</a>
    <h1>Jusu laiskai:</h1>
    @if(count($mails) >= 1)
        @foreach($mails as $mail)
            <div class="well">
                <h3><a href="/mail/{{$mail->id}}">{{$mail->text}}</a></h3>
            </div>
        @endforeach
    @else
        <p>Jus neturite laisku</p>
    @endif
@endsection