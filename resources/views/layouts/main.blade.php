<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mitchell Ads</title>

        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }}">
        <link rel="stylesheet" href="{{ URL::asset('css/app.min.css'); }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('img/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('img/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('img/favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ URL::asset('img/favicons/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ URL::asset('img/favicons/safari-pinned-tab.svg') }}" color="#e30033">
        <meta name="msapplication-TileColor" content="#e30033">
        <meta name="theme-color" content="#212621">

        @yield('css')

        <script src="{{ URL::asset('js/jquery-3.6.0.min.js'); }}"></script>
        @yield('atf-js')

    </head>
    <body>
        <div class="header-content">
            <div class="d-block">
                <div class="d-flex float-start">
                    <img src="{{ URL::asset('img/Mitchell-Grocery-Logo-gray-2021.svg') }}" height="34px" />
                </div>        
            </div>
        </div>
        <footer class="footer-content">
            <div class="d-block w-100">
                <div class="d-flex">
                    <img class="mx-auto" src="{{ URL::asset('img/Mitchell-Grocery-Logo-gray-2021.svg') }}" height="34px" />
                </div>    
            </div>
        </footer>
    </body>
</html>
