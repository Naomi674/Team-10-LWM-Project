@extends('auth.Components.auth-layout')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="box">
        @csrf
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input id="email" type="email" placeholder="E-mail" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="icon is-small is-left">
                                      <i class="fas fa-envelope"></i>
                                    </span>
            </p>
            @error('email')
            <p class="help is-danger" role="alert">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="field">
            <p class="control has-icons-left">
                <input id="password" type="password" placeholder="Password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="current-password">
                <span class="icon is-small is-left">
                                      <i class="fas fa-lock"></i>
                                    </span>
            </p>
            @error('password')
            <p class="help is-danger" role="alert">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="level">
            <p class="level-left">
                <button type="submit" class="button is-primary">
                    Login
                </button>
            </p>
            <p class="level-item">
                <a class="button is-ghost" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </p>
        </div>
    </form>
@endsection