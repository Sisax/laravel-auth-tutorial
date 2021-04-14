<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <form
            action="/contact"
            method="POST"
        >
            @csrf
            <input 
                type="email" 
                name="email" 
                placeholder="E-mail"
            >
            @error('email')
                <p>{{ $message }}</p>
            @enderror
            <button type="submit">Send email</button>
            @if (session('message'))
                <p>{{ session('message') }}</p>
            @endif
        </form>
    </body>
</html>
