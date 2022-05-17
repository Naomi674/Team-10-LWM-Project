@extends('auth.Components.auth-layout')

@section('content')
    @if (session('status'))
        <div class="notification is-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="box">
        @csrf
        <label class="label">Forgot your password?</label>
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
            <p class="control">
                <button type="submit" class="button is-primary is-fullwidth">
                    Send Password Reset Link
                </button>
            </p>
        </div>
        <div class="field">
            <p class="control">
                <a href="{{ route('login') }}" class="button is-ghost is- is-fullwidth">Go Back</a>
            </p>
        </div>
    </form>
@endsection