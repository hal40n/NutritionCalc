<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
       <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="bg-[url('/images/pizza-2589577_1280.jpg')]">
        <div class="font-sans antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
