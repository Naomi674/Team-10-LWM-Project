@extends('Components.layout')

@section('content')

    <div class="field has-addons is-justify-content-right mt-6 mr-6 has-icons-right">

    <div class="container mt-5 p-6">
            <div class="columns">
            <div class="column is-one"><div class="card">
                    <ul>
                        <li class="title is-5 p-2" style="background: #e35205">Legend</li>
                        <li>
                            <span class="icon">
                      <i class="fa-solid fa-circle-check"></i>
                    </span>
                            No issues
                        </li>
                        <li>
                            <span class="icon">
                      <i class="fa-solid fa-circle-info"></i>
                    </span>
                            Planned maintenance
                        </li>
                        <li><span class="icon">
                      <i class="fa-solid fa-circle-minus"></i>
                    </span>
                            Service degradation
                        </li>
                        <li><span class="icon">
                     <i class="fa-solid fa-circle-exclamation"></i>
                    </span>
                            Outage
                        </li>
                        <li>
                            <span class="icon">
                     <i class="fa-solid fa-circle-plus"></i>
                    </span>
                            Multiple issues
                        </li>
                    </ul>
            </div></div>
            <div class="column is-four-fifths">
                <table class="table is-hoverable is-fullwidth ml-auto mr-auto ">
                    <thead>
                    <tr>
                        <th>Status history</th>
                        <th>{{ \Carbon\Carbon::today()->format('d-m') }}</th>
                        <th>{{ \Carbon\Carbon::today()->subDays(1)->format('d-m') }}</th>
                        <th>{{ \Carbon\Carbon::today()->subDays(2)->format('d-m') }}</th>
                        <th>{{ \Carbon\Carbon::today()->subDays(3)->format('d-m') }}</th>
                        <th>{{ \Carbon\Carbon::today()->subDays(4)->format('d-m') }}</th>
                        <th>Now</th>
                        @if(auth()->user()->role_id === 1)
                            <th></th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($systems as $system)
                        <tr>
                            <th>{{ $system->title }}</th>
                            <th>
                                <span class="icon">
                                    @if($system->day1 === 1)
                                        <i class="fa-solid fa-circle-check --fa-primary-color:green"></i>
                                    @else
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    @endif
                                </span>
                            </th>
                            <th>
                                <span class="icon">
                                    @if($system->day2 === 1)
                                        <i class="fa-solid fa-circle-check --fa-primary-color:green"></i>
                                    @else
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    @endif
                                </span>
                            </th>
                            <th>
                                <span class="icon">
                                    @if($system->day3 === 1)
                                        <i class="fa-solid fa-circle-check --fa-primary-color:green"></i>
                                    @else
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    @endif
                                </span>
                            </th>
                            <th>
                                <span class="icon">
                                    @if($system->day4 === 1)
                                        <i class="fa-solid fa-circle-check --fa-primary-color:green"></i>
                                    @else
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    @endif
                                </span>
                            </th>
                            <th>
                                <span class="icon">
                                    @if($system->day5 === 1)
                                        <i class="fa-solid fa-circle-check --fa-primary-color:green"></i>
                                    @else
                                        <i class="fa-solid fa-circle-xmark"></i>
                                    @endif
                                </span>
                            </th>
                            <th>{{ $system->status === 0 ? " Under maintenance" : 'Operational' }}</th>
                            @if(auth()->user()->role_id === 1)
                                @if($system->status === 1)
                                    <form method="POST" action="{{ route('status.update', $system->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <th><button type="submit" class="button is-danger">Maintain</button></th>
                                    </form>
                                @else
                                    <form method="POST" action="{{ route('status.update', $system->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <th><button type="submit" class="button is-success">End maintenance</button></th>
                                    </form>
                                @endif
                            @endif
                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <button class="buttons has-background-warning button is-link">
            <a href="{{ route('chats.create') }}">Send message</a>
        </button>

        @if(auth()->user()->role_id === 1)
        <button onclick="fetchMessages()" class="buttons has-background-black button is-link">
            Check for new message
        </button>
        @endif

    </div>

        <script src="/js/chat.js"></script>

        <div class="modal" id="message-modal">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Modal title</p>
                    <button class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body" id="message-section">

                </section>
            </div>
        </div>

@endsection