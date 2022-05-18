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
                        {{--A added form needs to have the class 'box'--}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>