@extends('Components.layout')

@section('content')
    <div class="container mt-5">
        <div class="columns is-centered">
            <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                <form method="POST" action="{{ route('user-profile-information.update') }}" class="box">
                    @csrf
                    @method('PUT')

                    <div class="field">
                        <label class="label" for="name">Name</label>
                        <div class="control has-icons-left">
                            <input class="input" id="name" type="text" name="name" value="{{ auth()->user()->name }}">
                            <span class="icon is-small is-left">
                                <i class="fa-solid fa-id-card"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                            <div class="control has-icons-left">
                                <input class="input" type="email" name="email" value="{{ auth()->user()->email }}">
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
                    <div class="control">
                        <p class="field">
                            <button type="submit" class="button is-success">
                                Save
                            </button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection