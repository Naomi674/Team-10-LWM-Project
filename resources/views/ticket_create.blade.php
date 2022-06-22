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
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="description">Description: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="description" name="description">
{{--                    <textarea class="h-15 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="description" name="description"></textarea>--}}
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="time">Time: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="time" name="time">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="location">Location: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="location" name="location">
                </div>

                <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
                <a href="{{ route('ticket.index') }}" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
            </form>
        </div>
        </body>
    </div>
@endsection
