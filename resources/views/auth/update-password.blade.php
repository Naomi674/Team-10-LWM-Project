@extends('auth.Components.auth-layout')

@section('content')
    
    @if(session('status') == 'password-updated')
        <div class="notification is-success">
            Password updated successfully.
        </div>
    @endif

    <form method="POST" action="{{ route('user-password.update') }}" class="box">
        @csrf
        @method('PUT')

        <h1 class="is-size-4">Chnage Password</h1>

        <hr>

        <div class="field">
            <label class="label" for="current_password">{{ __('Current Password') }}</label>
            <div class="control">
                <input id="current_password" type="password" class="input @error('current_password', 'updatePassword') is-danger @enderror" name="current_password" required autofocus>
            </div>

            @error('current_password', 'updatePassword')
            <p class="help is-danger" role="alert">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="field">
            <label class="label" for="password">{{ __('Password') }}</label>
            <div class="control">
                <input id="password" type="password" class="input @error('password', 'updatePassword') is-danger @enderror" name="password" required autocomplete="new-password">
            </div>

            @error('password', 'updatePassword')
            <p class="help is-danger" role="alert">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="field">
            <label class="label" for="password-confirm">{{ __('Confirm Password') }}</label>
            <div class="control">
                <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <hr>

        <div class="level">
            <p class="level-left">
                <button type="submit" class="button is-primary">
                    Update Password
                </button>
            </p>
            <p class="level-item">
                <a class="button is-ghost" href="{{ route('account.index') }}">
                    Go Back
                </a>
            </p>
        </div>

    </form>
@endsection