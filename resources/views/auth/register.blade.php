<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

<body>
    <div class="container">

        <form method="POST" action="{{ route('liste') }}">
            @csrf
            <div class="container mt-3 text-primary shadow p-3 mb-5 bg-body rounded">
                <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded"><strong
                        style="color: green">FORMULAIRE D'INSCRIPTION</strong></h2>

                <!-- Name -->
                <div class="mt-4">
                    <x-label for="name" :value="__('Nom')" />

                    <x-input id="name" class="form-control" type="name" name="text" required autocomplete="name" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                        autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Mot de passe')" />

                    <x-input id="password" class="form-control" type="password" name="password" required
                        autocomplete="current-password" />
                </div>
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirme le mot de passe')" />

                    <x-input id="password_confirmation" class="form-control" type="password"
                        name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ml-4 bg-success">
                        {{ __('Enregistrer') }}
                    </x-button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
