<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>La Molisana @yield('titolo')</title>
        <script src="https://kit.fontawesome.com/fb0ae73ee5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.header')




        <main>
            @yield('mainContent')

        </main>

        @include('partials.footer')







    </body>
</html>
