<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LaravelNotes | Home</title>
        <link rel="stylesheet" href="{{ asset('css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>

    <body>
        <x-navbar />
        <h2 class="content-margins">Secure, minimalistic note-taking.</h2>
        <p class="content-margins">
            LaravelNotes is a sanctuary for your thoughts, a digital space crafted
            with meticulous attention to security and simplicity. Embracing the
            principles of minimalism, we've stripped away the unnecessary, leaving
            only the essential: a clean, intuitive interface for your notes.
            <br/><br/>
            <strong>Securely</strong> stored and easily accessible, your ideas
            are shielded from prying eyes, allowing you to focus on what truly
            matters. We believe that clarity fosters creativity and that a
            clutter-free environment empowers productivity.
            <br/><br/>
            <strong>Elegance</strong> is found in restraint and
            <strong>power</strong> in simplicity. LaravelNotes is more than just
            a note-taking application; it's a testament to the idea that less is
            more. Whether you're capturing fleeting inspirations or organising
            complex projects, we provide the tools you need, without the
            distractions you don't.
            <br/><br/>
            <strong>Privacy</strong> is paramount. We understand the importance of
            keeping your notes confidential. That's why we've implemented robust
            security measures to ensure that your data remains yours, and yours
            alone.
            <br/><br/>
            From the first line of code, to the final pixel on the screen,
            LaravelNotes has been built with a singular vision: to provide a
            secure, minimalist and efficient note-taking experience. We invite you
            to experience the difference for yourself.
        </p>
    </body>
</html>