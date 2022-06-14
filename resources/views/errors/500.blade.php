@extends('Components.layout')

@section('content')
    <section class="hero is-fullheight-with-navbar">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <img class="image mr-6" src="images/farmer.gif">
                    <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        <h1 class="is-size-1">500</h1>
                        <p>Sorry! This was not supposed to happen, but a server error appeared. If the error keeps appearing for some time, please contact the IT Support.</p>
                    </div>
                </div>
                <div class="columns is-centered mt-4">
                    <a class="button is-link" href="{{ route('index') }}">Go Home</a>
                </div>
            </div>
        </div>
    </section>
@endsection