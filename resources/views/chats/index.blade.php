@extends('Components.layout')

@section('content')

    <div class="container-md">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="box pull-left p-4">
                    <h2>Displayed messages</h2>
                </div>
            </div>
        </div>

        @if(session() ->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="pull-right p-4">
            <a class="button is-warning is-bold" href="{{ route('chats.create') }}">Send a message</a>
        </div>
@endsection