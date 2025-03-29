<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LaravelNotes | Login</title>
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    </head>

    <body>
        <x-navbar />
        <h2 class="content-margins">Notes</h2>
        @if ($authed)
            <p>You are authed.</p>
        @else
            <p>You are not authed.</p>
        @endif
    </body>
</html>