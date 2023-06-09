<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img width="50" src="{{ asset('assets/images/logo.jpg') }}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    @if (Route::has('login'))
                     <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                        @auth
                        <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link btn btn-outline-secondary">Dashboard</a>
                        </li>
                        @else
                        <li class="nav-item">
                        <a href="{{ route('login') }}" class=" btn btn-secondary me-2 mb-2">Log in</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                        <a href="{{ route('register') }}" class=" btn btn-primary">Register</a>
                        </li>
                        @endif
                        @endauth
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </nav>

            <main class="container">
                <div class="text-center">
                    <img src="{{ asset('assets/images/logo.jpg') }}" alt="logo">
                    <h1>Registrati o Accedi alla tua Dashboard</h1>
                </div>
            </main>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
     </body>
</html>
