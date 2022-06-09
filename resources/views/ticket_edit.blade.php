@extends('Components.layout')

@section('content')
    <div class="container mt-4">
        <div class="column">
            <div class="columns">
                <!-- Title -->
                <div class="column is-one-fourth">
                    <div class="title">My Tickets</div>
                </div>
                <!-- Drop down Menu -->
                <div class="column is-one-fourth">
                    <div class="dropdown">
                        <div class="dropdown-trigger">
                            <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                <span>Sort By</span>
                                <span class="icon is-small">
                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                 </span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item">
                                    Most Recent
                                </a>
                                <a class="dropdown-item">
                                    Low To High Priority
                                </a>
                                <a href="#" class="dropdown-item">
                                    High To Low Priority
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Script for dropdown -->
        <script>
            let dropdown = document.querySelector('.dropdown');
            dropdown.addEventListener('click', function(event) {
                event.stopPropagation();
                dropdown.classList.toggle('is-active');
            });
        </script>
        <!-- Start of The Tickets -->
{{--        <div class="column">--}}
{{--            <div class="box">--}}
{{--                <div class="columns">--}}
{{--                    <div class="column is-five-fifth">--}}
{{--                        <p>--}}
{{--                            <strong>Title:</strong> CEO Meeting <br>--}}
{{--                            <strong>Description:</strong> Meeting to discuss company changes <br>--}}
{{--                            <strong>Time:</strong> 13:00 <br>--}}
{{--                            <strong>Location:</strong> Meeting room 2 <br>--}}
{{--                            <strong>Opened By:</strong> Polly <br>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="column is-one-fifth">--}}
{{--                        <div class="buttons">--}}
{{--                            <button class="button is-danger">High</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="box">--}}
{{--                <div class="columns">--}}
{{--                    <div class="column is-five-fifth">--}}
{{--                        <p>--}}
{{--                            <strong>Title:</strong> Accounting Meeting <br>--}}
{{--                            <strong>Description:</strong> Meeting to discuss the quarterly income of the company <br>--}}
{{--                            <strong>Time:</strong> 11:00 <br>--}}
{{--                            <strong>Location:</strong> Meeting room 5 <br>--}}
{{--                            <strong>Opened By:</strong> Martin <br>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="column is-one-fifth">--}}
{{--                        <div class="buttons">--}}
{{--                            <button class="button is-danger">High</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="box">--}}
{{--                <div class="columns">--}}
{{--                    <div class="column is-five-fifth">--}}
{{--                        <p>--}}
{{--                            <strong>Title:</strong> The Lunch Room Debacle <br>--}}
{{--                            <strong>Description:</strong> Meet to discuss if we should expand the menu <br>--}}
{{--                            <strong>Time:</strong> 14:00 <br>--}}
{{--                            <strong>Location:</strong> Meeting room 3 <br>--}}
{{--                            <strong>Opened By:</strong> Lars <br>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="column is-one-fifth">--}}
{{--                        <div class="buttons">--}}
{{--                            <button class="button is-warning">Medium</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="box">--}}
{{--                <div class="columns">--}}
{{--                    <div class="column is-five-fifth">--}}
{{--                        <p>--}}
{{--                            <strong>Title:</strong> Daily Standup <br>--}}
{{--                            <strong>Description:</strong> See where the project team is at and what the will do for the day <br>--}}
{{--                            <strong>Time:</strong> 9:00 <br>--}}
{{--                            <strong>Location:</strong> Meeting room 1 <br>--}}
{{--                            <strong>Opened By:</strong> Owen <br>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="column is-one-fifth">--}}
{{--                        <div class="buttons">--}}
{{--                            <button class="button is-success">Low</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
//
{{--        <div class="column">--}}
{{--        @foreach($tickets as $ticket)--}}
{{--            <div class="box">--}}
{{--                <div class="columns">--}}
{{--                    <div class="column is-five-fifth">--}}
{{--                        <p>--}}
{{--                            <strong>Title:</strong> {{$ticket->title}}<br>--}}
{{--                            <strong>Description:</strong> {{$ticket->description}} <br>--}}
{{--                            <strong>Time:</strong> {{number_format($ticket->time, 2)}} <br>--}}
{{--                            <strong>Location:</strong> Meeting room 5 <br>--}}
{{--                            <strong>Opened By:</strong> {{$ticket->author()->first()->name}} <br>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="column is-one-fifth">--}}
{{--                        <div class="buttons">--}}
{{--                            <button class="button is-danger">High</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--        </div>--}}

        <body>
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
            <form method="POST" action="{{ route('ticket.edit',$ticket->id) }}">
                @csrf

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="title">Title: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="content">Description: </label>
                    <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="description" name="description"></textarea>
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="content">Time: </label>
                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="time" name="time">
                </div>

                <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
                <a href="{{ route('ticket.index') }}" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
            </form>
        </div>
        </body>
    </div>
@endsection
