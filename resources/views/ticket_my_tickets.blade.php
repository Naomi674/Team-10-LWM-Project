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
                                <a href="{{ route('ticket.myTickets') }}?desc=0" class="dropdown-item">
                                    Low To High Priority
                                </a>
                                <a href="{{ route('ticket.myTickets') }}?desc=1" class="dropdown-item">
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


        <div class="column">
            <div class="box">
                <div class="column is-one-fifth">
                    <div class="buttons">
                        <a class="button is-primary is-large " href="{{ route('ticket.create') }}">Create New Ticket</a>

                    </div>
                </div>
                <div class="column is-one-fifth">
                    <div class="buttons">
                        <a class="button is-danger is-large " href="{{ route('ticket.index') }}">View all tickets</a>

                    </div>
                </div>
            </div>
        @foreach($tickets as $ticket)
            <div class="box">
                <div class="columns">
                    <div class="column is-five-fifth">
                        <p>
                            <strong>Title:</strong> {{$ticket->title}}<br>
                            <strong>Description:</strong> {{$ticket->description}} <br>
                            <strong>Time:</strong> {{number_format($ticket->time, 2)}} <br>
                            <strong>Location:</strong> {{$ticket->location}} <br>
                            <strong>Opened By:</strong> {{$ticket->author()->first()->name}} <br>
                            <strong>Priority:</strong> {{ $priorities_contract[$ticket->priority]}} <br>
                            @if (auth()->user()->role_id == 1)
                            <form method="PUT" action="{{ route('ticket.edit', $ticket) }}">
                                @csrf
                                <div class="select is-primary is-small">
                                    <select id="status" name="status">
                                        @foreach($available_statuses as $status)
                                            <option value="{{$status}}" @if($ticket->status==$status)selected="selected"@endif>{{ $statuses_contract[$status]}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="button is-primary is-small">
                                <button type="submit" class="button is-primary is-small">
                                    <span>Update</span>
                                    <i data-feather="info"></i>
                                </button>
                                </div>
{{--                                <strong>Status:</strong> {{ $statuses_contract[$ticket->status]}}--}}
                            </form>
                            @endif
                        </p>
                    </div>
                    <div class="column is-one-fifth">
                        <form method="POST" action="{{ route('ticket.destroy',  $ticket->id ) }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="button is is-danger is-outlined">
                                <span>Delete</span>
                                <i data-feather="delete"></i>
                            </button>
                        </form>


{{--                        <div class="buttons">--}}
{{--                            <a class="button is-danger" href="ticket/{{ $ticket->id }}/destroy">Delete</a>--}}
{{--                            <a href="{{ url('ticket/delete/'.$ticket->id) }}" class="button is-danger">Delete</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>
@endsection
