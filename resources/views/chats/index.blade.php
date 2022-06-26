@extends('Components.layout')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/js/bootstrap.min.js" integrity="sha512-Hqe3s+yLpqaBbXM6VA0cnj/T56ii5YjNrMT9v+us11Q81L0wzUG0jEMNECtugqNu2Uq5MSttCg0p4KK0kCPVaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('content')

    <div class="container-md">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="box pull-left p-4">
                    <h2>Displayed messages</h2>
                </div>
            </div>

            @if(session()->get('success'))
                <div class="alert alert-success p-6 has-background-success-light">
                    {{ session()->get('success') }}
                </div><br/>
            @endif


            @foreach($messages as $message)
                <ul>
                    <li>{{$message->$text}}</li>
                </ul>
            @endforeach


        <div class="pull-right p-4">
            <a class="button is-warning is-bold" href="{{ route('chats.create') }}">Send a message</a>
        </div>


@endsection