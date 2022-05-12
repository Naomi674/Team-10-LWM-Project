@extends('Components.layout')

@section('content')
    <div class="container mt-5">
        <div class="columns is-centered">
            <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                <form method="POST" action="{{ route('login') }}" class="box">
                    @csrf
                    <div class="field">
                        <label class="label" for="name">Name</label>
                        <div class="control has-icons-left">
                            <input class="input" type="text" name="name" value="{{ auth()->user()->name }}">
                            <span class="icon is-small is-left">
                                <i class="fa-solid fa-id-card"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                            <div class="control has-icons-left">
                                <input class="input" type="email" value="{{ auth()->user()->email }}">
                                <span class="icon is-small is-left">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                            </div>
                    </div>
                    <div class="field">
                        <label>
                            <p class="label">Password</p>
                            <div class="control has-icons-left">
                                <p class="input">***********</p>
                                <span class="icon is-small is-left">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                            </div>
                        </label>
                    </div>
                    <div class="field">
                        <label>
                            <p class="label">Role</p>
                            <div class="control has-icons-left">
                                <p class="input">{{ auth()->user()->role_id == 0 ? 'User' : 'Admin' }}</p>
                                <span class="icon is-small is-left">
                                    @if(auth()->user()->role_id == 0)
                                        <i class="fa-solid fa-user"></i>
                                    @else
                                        <i class="fa-solid fa-wrench"></i>
                                    @endif
                                </span>
                            </div>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection