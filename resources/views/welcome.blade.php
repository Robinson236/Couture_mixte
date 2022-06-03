<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mixte_couture</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block ">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                        <button type="button" class="btn btn-success">Connexion</button>
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                            <button type="button" class="btn btn-success">S'inscrire</button>
                        </a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="container-fluide">
            <h1 class="text-center " style="color: green"><strong style="color: green"> Bienvenu à Couture Mixte</strong></h1>
            <img src="{{ asset('image/prof.webp') }}" width='100%' height="550px" alt="">
        </div>
    </div>
</body>
<footer class="text-center mb-3" style="background-color: green">Copyright DEV_LEON 2022</footer>

</html>
