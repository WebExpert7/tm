<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">
    <!-- common libraries. required for every page-->
    <script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery-pjax/jquery.pjax.js') }}"></script>
    <script src="{{ asset('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/widgster/widgster.js') }}"></script>
    <script src="{{ asset('lib/underscore/underscore.js') }}"></script>

    <!-- common application js -->
    <script src="{{ asset('js/main_app.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body>
    <div id="app">
        <div class="logo">
            <h4><a href="{{ url('/') }}">Light <strong>Blue</strong></a></h4>
        </div>
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li>
                        <a href="{{ route('login') }}" style="font-size: 15px;">
                           Login
                        </a>
                    </li>
                    <li>
                        <span>&nbsp &nbsp &nbsp</span>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" style="font-size: 15px;">
                           Register
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
