@extends('Components.layout')

@section('content')
    <div class="container mt-4">
        <div class="column">
            <div class="columns">
                <!-- Title -->
                <div class="column is-one-fourth">
                    <div class="title">Create a Ticket</div>
                </div>

        <body>
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
            <form method="POST" action="{{ route('ticket.store') }}">
                @csrf

                <div class="mb-4">
                    <label class="text-gray-800" for="title">Title: </label>
                    <input class="input is-medium" type="text" placeholder="Title..." id="title" name="title">
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="description"><strong>Description:</strong> </label>
                    <input class="input is-large" type="text" placeholder="Description..." id="description" name="description">
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
{{--                    <textarea class="h-15 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="description" name="description"></textarea>--}}
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="time">Time: </label>
                    <input class="input is-medium" type="text" placeholder="Time..." id="time" name="time">
                    @if ($errors->has('time'))
                        <span class="text-danger">{{ $errors->first('time') }}</span>
                    @endif
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-900" for="location">Location: </label>
                    <input class="input is-medium" type="text" placeholder="Location..." id="location" name="location">
                    @if ($errors->has('location'))
                        <span class="text-danger">{{ $errors->first('location') }}</span>
                    @endif
                </div>

                <div class="select is-primary is-small">

                <select id="priority" name="priority">
                    @foreach($available_priorities as $priority)
                        <option value="{{$priority}}" >{{ $priorities_contract[$priority]}}</option>
                    @endforeach
                </select>
                </div>






                {{--                <div class="mb-4">--}}
{{--                    <label class="font-bold text-gray-900" for="priority">Priority: </label>--}}
{{--                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="priority" name="priority">--}}
{{--                </div>--}}


                <button class="button is-success">
    <span class="icon is-small">
      <i class="fas fa-check"></i>
    </span>
                    <span>Save</span>
                </button>
                <a href="{{ route('ticket.index') }}" class="button is-warning">Cancel</a>
            </form>
        </div>
        </body>
    </div>
@endsection
