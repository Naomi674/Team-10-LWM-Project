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
    <section class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        <form method="POST" action="{{ route('login') }}" class="box">
                    @csrf
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="email" name="email" placeholder="Email">
                            <span class="icon is-small is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                            <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" type="password" name="password" placeholder="Password">
                            <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-success">
                                Login
                            </button>
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