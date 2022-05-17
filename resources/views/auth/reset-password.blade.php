@extends('auth.Components.auth-layout')

@section('content')
    <form method="POST" action="{{ route('password.update') }}" class="box">
        @csrf

        <input type="hidden" name="token" value="{{ request()->token }}">

        <h1 class="is-size-4">Reset Password</h1>

        <hr>

        <div class="field">
            <label class="label" for="email">{{ __('E-Mail Address') }}</label>
            <div class="control">
                <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            </div>

            @error('email')
            <p class="help is-danger" role="alert">
                {{ $message }}
            </p>
            @enderror
        </div>

        <hr>

        <div class="field">
            <label class="label" for="password">{{ __('Password') }}</label>
            <div class="control">
                <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="new-password">
            </div>

            @error('password')
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

        <div class="field is-form-action-buttons">
            <button type="submit" class="button is-primary">
                {{ __('Reset Password') }}
            </button>
        </div>

    </form>
@endsection