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
</head>
<body>
    <div class="logo">
        <h4><a href="{{ url('/') }}"><strong>Tradeum</strong></a></h4>
    </div>

    {{--  <-- right side bar-->  --}}
    <nav id="sidebar" class="sidebar nav-collapse collapse">
        <ul id="side-nav" class="side-nav">
            <li class="">
                <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
            </li>
            <li class="">
                <a href="package.html"><i class="fa fa-shopping-cart"></i> <span class="name">Token Sale</span></a>
            </li>
            <li class="">
                <a href="package.html"><i class="fa fa-google-wallet"></i> <span class="name">Wallet</span></a>
            </li>
            <li class="">
                <a href="package.html"><i class="fa fa-users"></i> <span class="name">Team</span></a>
            </li>
            <li class="">
                <a href="package.html"><i class="fa fa-user"></i> <span class="name">Account</span></a>
            </li>
            <li class="">
                <a href="package.html"><i class="fa fa-life-ring"></i> <span class="name">Support</span></a>
            </li>
        </ul>
    </nav>   
    <div class="wrap">
        {{--  <-- right side bar-->  --}}
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account"
                        class="dropdown-toggle"
                        data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.png" alt="">
                                {{ Auth::user()->name }}
                            </li>
                            <li role="presentation">
                                <a href="" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <!-- <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="visible-xs">
                        <a href="#"
                        class="btn-navbar"
                        data-toggle="collapse"
                        data-target=".sidebar"
                        title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form><i class="glyphicon glyphicon-off"></i></a></li>
                    
                </ul>
            </div>
        </header>
        @yield('content')
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>
            <!-- Scripts -->
            <!-- common libraries. required for every page-->
        <script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/jquery-pjax/jquery.pjax.js') }}"></script>
        <script src="{{ asset('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/widgster/widgster.js') }}"></script>
        <script src="{{ asset('lib/underscore/underscore.js') }}"></script>

        <!-- common application js -->
        <script src="{{ asset('js/main_app.js') }}"></script>
        <script src="{{ asset('js/settings.js') }}"></script>

        <!-- common templates -->
        <script type="text/template" id="settings-template">
            <div class="setting clearfix">
                <div>Sidebar on the</div>
                <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
                    <% onRight = sidebar == 'right'%>
                    <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
                    <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
                </div>
            </div>
            <div class="setting clearfix">
                <div>Sidebar</div>
                <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
                    <% display = displaySidebar%>
                    <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
                    <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
                </div>
            </div>
            <div class="setting clearfix">
                <div>Light Version</div>
                <div>
                    <a href="../light/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="setting clearfix">
                <div>White Version</div>
                <div>
                    <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </script>

        <script type="text/template" id="sidebar-settings-template">
            <% auto = sidebarState == 'auto'%>
            <% if (auto) {%>
            <button type="button"
                    data-value="icons"
                    class="btn-icons btn btn-transparent btn-sm">Icons</button>
            <button type="button"
                    data-value="auto"
                    class="btn-auto btn btn-transparent btn-sm">Auto</button>
            <%} else {%>
            <button type="button"
                    data-value="auto"
                    class="btn btn-transparent btn-sm">Auto</button>
            <% } %>
        </script>

                    <!-- page specific scripts -->
            {{--  <script src="{{ asset('js/app.js') }}"></script>  --}}
            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Mar 25, 2018 15:37:25").getTime();
                
                // Update the count down every 1 second
                var x = setInterval(function() {
                
                    // Get todays date and time
                    var now = new Date().getTime();
                    
                    // Find the distance between now an the count down date
                    var distance = countDownDate - now;
                    
                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                    // Output the result in an element with id="round_time"
                    document.getElementById("round_time").innerHTML = days + "<span style='font-size:10px;'> days </span>" + hours + "<span style='font-size:10px;'> hrs </span>"
                    + minutes + "<span style='font-size:10px;'> mins </span>" + seconds + "<span style='font-size:10px;'> seconds </span>";
                    
                    // If the count down is over, write some text 
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("round_time").innerHTML = "EXPIRED";
                    }
                }, 1000);
                </script>
</body>
</html>
