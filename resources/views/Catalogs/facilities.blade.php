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
                            <li><a class="is-active">Main service</a></li>
                            <li><a>Requests</a></li>
                            <li><a>Issues</a></li>
                            <li><a>Feedback</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <!-- Right Side -->
            <div class="column is-three-quarters">
                <div class="table">Ehre</div>
            </div>
        </div>
    </div>
@endsection
