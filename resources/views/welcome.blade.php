@extends('Components.layout')

@section('content')
    <div class="notification is-danger ml-6 mr-6 mt-4">
        <button class="delete"></button>
        System <strong>/XX/</strong> is down! Click <a class="js-modal-trigger" data-target="modal-js-example">here</a>
        to read more.
    </div>

    <section class="container mt-6">
        <div class="columns is-multiline is-centered">
            <div class="column is-10 register">
                <div class="columns">
                    <div class="column left">
                        <h1 class="title is-1">Hello, {{ $user->name }}</h1>
                        <h2 class="subtitle colored is-4">Today you have the following activities planned:</h2>
                        <p>11:00 - Meeting with CEO</p>
                        <p>12:00 - Lunch</p>
                    </div>
                    <div class="column right has-text-centered">
                        <h1 class="title is-4">Apps</h1>
                        <form>
                            <div class="box">
                                <p class="has-text-left has-text-weight-bold">Your recently used apps:</p>
                                <div class="control">
                                    <p class="has-text-left mt-4 is-underlined">Request new laptop</p>
                                    <p class="has-text-left is-underlined">File a exemption</p>
                                    <p class="has-text-left is-underlined">Create a ticket</p>
                                </div>
                            </div>

                            <div class="box">
                                <p class="has-text-left has-text-weight-bold">Your favorite apps:</p>
                                <div class="control">
                                    <p class="has-text-left mt-4 is-underlined">Order lunch</p>
                                    <p class="has-text-left is-underlined">Change password</p>
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
@endsection
