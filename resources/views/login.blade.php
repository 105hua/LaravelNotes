<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LaravelNotes | Login</title>
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>

    <body>
        <x-navbar />
        <h2 class="content-margins">Login</h2>

        <form method="POST" action="/login">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}"></br>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"></br>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
            <button type="submit">Login</button>
            @error("fail_reason")
                <div class="error">{{ $message }}</div>
            @enderror
        </form>
    </body>
</html>