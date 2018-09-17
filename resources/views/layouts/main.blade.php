<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Materialize Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- app.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        @yield('head')

    </head>
    <body style="display: none;">

        @yield('body')
        
    </body>

    <!-- app.js -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Script -->
    <script>
        window.addEventListener('load', function () {

            @yield('script')

            document.body.style.display = 'initial';
        });
    </script>
</html>
