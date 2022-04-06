@extends('Components.layout')

@section('content')
    <div class="notification is-danger ml-6 mr-6 mt-4">
        <button class="delete"></button>
        System <strong>/XX/</strong> is down! Click <a>here</a> to read more.
    </div>

    <section class="container mt-6">
        <div class="columns is-multiline is-centered">
            <div class="column is-10 register">
                <div class="columns">
                    <div class="column left">
                        <h1 class="title is-1">Hello 'Name',</h1>
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
@endsection
