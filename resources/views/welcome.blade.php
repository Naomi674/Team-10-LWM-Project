@extends('Components.layout')

@section('content')

{{--    make if statement to check if any from systems is down --}}
    @if(count($systems) > 0)
        @foreach($systems as $system)
            @if($system->status === false)
                <div class="notification is-danger ml-6 mr-6 mt-4">
                    <button class="delete"></button>
                    System <strong>{{$system->title}}</strong> is down! Click <a class="js-modal-trigger" data-target="modal-js-example">here</a>
                    to read more.
                </div>
            @endif
        @endforeach
    @endif

    <section class="container mt-6">
        <div class="columns is-multiline is-centered">
            <div class="column is-10 register">
                <div class="columns">
                    <div class="column left">
                        <h1 class="title is-1">Hello, {{ $user->name }}</h1>
                        <div id="quotes"></div>
                    </div>

                    <div class="column right has-text-centered">
                        <h1 class="title is-4">Apps</h1>
                        <form>
                            <div class="box">
                                <p class="has-text-left has-text-weight-bold">Your open tickets:</p>
                                <div class="control">
                                @if(count($tickets) > 0)
                                    @foreach($tickets as $ticket)
                                        <hr>
                                        <a href="{{ route('ticket.index') }}">
                                            <p class="has-text-left is-underlined">{{ $ticket->title}}</p>
                                            <p class="has-text-left has-text-grey-light">{{ $ticket->description }}</p>
                                        </a>
                                    @endforeach
                                @endif
                                </div>
                            </div>

                            <div class="box">
                                <p class="has-text-left has-text-weight-bold">Your most used services:</p>
                                <div class="control">
                                    <a class="has-text-left mt-4 is-underlined" href="{{ route('finance.index') }}">Financial services</a>
                                    <br>
                                    <a class="has-text-left is-underlined" href="{{ route('hr.index') }}">HR</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="modal-js-example" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Customers are experiencing [problem] with [Service]</p>
                <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <p>Some customers are seeing [problem]. We’re aware of the issue and are working on it urgently.

                    We’re really sorry to be holding you up today! Please know our teams are working hard to get
                    everything up and running, and we will update you in an hour with the latest information.</p>
            </section>
            <footer class="modal-card-foot">
                <button class="button">close</button>
            </footer>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Functions to open and close a modal
            function openModal($el) {
                $el.classList.add('is-active');
            }

            function closeModal($el) {
                $el.classList.remove('is-active');
            }

            function closeAllModals() {
                (document.querySelectorAll('.modal') || []).forEach(($modal) => {
                    closeModal($modal);
                });
            }

            // Add a click event on buttons to open a specific modal
            (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
                const modal = $trigger.dataset.target;
                const $target = document.getElementById(modal);
                console.log($target);

                $trigger.addEventListener('click', () => {
                    openModal($target);
                });
            });

            // Add a click event on various child elements to close the parent modal
            (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
                const $target = $close.closest('.modal');

                $close.addEventListener('click', () => {
                    closeModal($target);
                });
            });

            // Add a keyboard event to close all modals
            document.addEventListener('keydown', (event) => {
                const e = event || window.event;
            
                if (e.keyCode === 27) { // Escape key
                    closeAllModals();
                }
            });
        });
    </script>
    <script src="{{ asset('js/quotesApi.js') }}"></script>
@endsection
