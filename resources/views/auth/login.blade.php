<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

<body>


    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container  mt-3 text-primary shadow p-3 mb-5 bg-body rounded">
            <div class="mt-4">
                <x-label for="exampleInputEmail1" class="form-label" for="name" :value="__('Nom')" />

                <x-input id="name" class="form-control" type="name" name="text" required autocomplete="name" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="exampleInputEmail1" class="form-label" for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="exampleInputEmail1" class="form-label" for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="form-control" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif

                <x-button class="btn btn-success">
                    {{ __('Connecter') }}
                </x-button>
            </div>
    </form>
    </div>
</body>

</html>
