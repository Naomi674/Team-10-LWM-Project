@extends('Components.layout')

@section('content')
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                <form method="POST" action="{{ route('login') }}" class="box">
                    @csrf
                    <div class="field">
                        <label class="">
                            <p class="label">Name</p>
                            <input class="input" type="text" value="{{ auth()->user()->name }}">
                        </label>
                    </div>
                    <div class="field">
                        <label>
                            <p class="label">Email</p>
                            <input class="input" type="email" value="{{ auth()->user()->email }}">
                        </label>
                    </div>
                    <div class="field">
                        <label>
                            <p class="label">Password</p>
                            <p class="input">***********</p>
                        </label>
                    </div>
                    <div class="field">
                        <label>
                            <p class="label">Role</p>
                            <p class="input">{{ auth()->user()->role_id == 0 ? 'User' : 'Admin' }}</p>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection