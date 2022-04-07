@extends('Components.layout')

@section('content')
    <div class="hero mt-5">
        <p class="title has-text-centered">Facilities</p>
    </div>
    <div class="container mt-4">
        <div class="columns">
            <!-- Left side -->
            <div class="column is-one-quarter">
                @include('Catalogs.Components.CatalogDropdown')

                <div class="pt-6">
                    <div class="label">Categories</div>
                    <aside class="menu">
                        <ul class="menu-list">
                            <li><a href="#" class="has-background-primary has-text-white">Main service</a></li>
                            <li><a href="#">Requests</a></li>
                            <li><a href="#">Issues</a></li>
                            <li><a href="#">Feedback</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <!-- Right Side -->
            <div class="column">
                <div class="title">Main service</div>
                <div class="box">
                    <div class="columns">
                        <!-- Title -->
                        <div class="column is-one-fifths">
                            Book a meeting room
                        </div>
                        <!-- Excerpt -->
                        <div class="column is-three-fifths">
                            Make a Room Reservation with optional services.
                        </div>
                        <!-- Link Button -->
                        <div class="column is-one-fifth">
                            <a class="button is-link is-pulled-right">🠖</a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="columns">
                        <!-- Title -->
                        <div class="column is-one-fifths">
                            Cleaning
                        </div>
                        <!-- Excerpt -->
                        <div class="column is-three-fifths">
                            Order cleaning service
                        </div>
                        <!-- Link Button -->
                        <div class="column is-one-fifth">
                            <a class="button is-link is-pulled-right">🠖</a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="columns">
                        <!-- Title -->
                        <div class="column is-one-fifths">
                            Furniture
                        </div>
                        <!-- Excerpt -->
                        <div class="column is-three-fifths">
                            Order furniture for your workplace
                        </div>
                        <!-- Link Button -->
                        <div class="column is-one-fifth">
                            <a class="button is-link is-pulled-right">🠖</a>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="columns">
                        <!-- Title -->
                        <div class="column is-one-fifths">
                            Handyman
                        </div>
                        <!-- Excerpt -->
                        <div class="column is-three-fifths">
                            Order handyman servicex
                        </div>
                        <!-- Link Button -->
                        <div class="column is-one-fifth">
                            <a class="button is-link is-pulled-right">🠖</a>
                        </div>
                    </div>
                </div>
{{--                @foreach(item)--}}
{{--                show box for every entry--}}
{{--                @endforeach--}}
            </div>
        </div>
    </div>
@endsection
