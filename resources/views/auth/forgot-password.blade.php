<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Prototype LWM portal">
    <title>Lamb Weston - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/200185356f.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="hero has-background-secondary is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="title">{{ __('Reset Password') }}</div>

                <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                    @if (session('status'))
                        <div class="alert" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="field">
                            <label for="email" class="label">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="field pb-4">
                            <button type="submit" class="button is-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</section>
</body>
</html>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            </div>
        </div>
    </div>
</div>