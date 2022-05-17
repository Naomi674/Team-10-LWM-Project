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
                    <div class="column is-5-tablet is-4-desktop is-3-widescreen">
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
                    <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-success">
                                Login
                            </button>

                            <a class="is-link is-hoverable" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </p>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>