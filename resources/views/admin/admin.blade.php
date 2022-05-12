@extends('Components.layout')

@section('content')
<section class="section">
    <div class="columns">
        <div class="column is-one-third box has-text-centered">
            <span class="icon fa-stack fa-4x">
                <i class="fa-solid fa-users"></i>
            </span>
            <div class="card-footer">
                <a class="button is-link is-fullwidth" href="{{ route('admin.userManagement.index') }}">User Management</a>
            </div>
        </div>
    </div>
</section>
@endsection