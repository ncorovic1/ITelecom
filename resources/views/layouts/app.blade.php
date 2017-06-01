<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Title -->
        @yield('title')

        <!-- Styles -->
        @yield('styles')

        <!-- Fonts -->
        @yield('fonts')
        
        <!-- Laravel script -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'ITelecom') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{ url('/novosti') }}">
                                    <span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Novosti
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/fiksna-telefonija') }}">
                                    <span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;Fiksna telefonija
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/mobilna-telefonija') }}">
                                    <span class="glyphicon glyphicon-phone"></span>&nbsp;&nbsp;Mobilna telefonija
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/internet') }}">
                                    <span class="glyphicon glyphicon-globe"></span>&nbsp;&nbsp;Internet
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/tv') }}">
                                    <span class="glyphicon glyphicon-hd-video"></span>&nbsp;&nbsp;TV
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::guest())
                                <li>
                                    <a class="btn btn-default" href="{{ url('/login') }}">
                                        <span class="glyphicon glyphicon-log-in"></span>
                                        <!--<span class="glyphicon glyphicon-user"></span>-->&nbsp;&nbsp;Prijava
                                    </a>
                                </li>
                            @else
                                @if (Auth::user()->type == 'admin')
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;{{ Auth::user()->full_name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ url('/moj-nalog') }}">
                                                    Moj nalog
                                                </a>
                                            </li>
                                            <li class="divider">
                                            <li>
                                                <a href="{{ url('/register') }}">
                                                    Registracija korisnika
                                                </a>
                                            </li>
                                            <li class="divider">
                                            <li>
                                                <a href="{{ url('/dnevnik-prijava') }}">
                                                    Dnevnik prijava
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/dnevnik-posjeta') }}">
                                                    Dnevnik posjeta
                                                </a>
                                            </li>
                                            <li class="divider">
                                            <li>
                                                <a id="navbar-logout-link" href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Odjava
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @elseif (Auth::user()->type == 'worker')
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;{{ Auth::user()->full_name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                        <li>
                                                <a href="{{ url('/moj-nalog') }}">
                                                    Moj nalog
                                                </a>
                                            </li>
                                            <li class="divider">
                                            <li>
                                                <a id="navbar-logout-link" href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Odjava
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @elseif (Auth::user()->type == 'client')
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;{{ Auth::user()->full_name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                        <li>
                                                <a href="{{ url('/moj-nalog') }}">
                                                    Moj nalog
                                                </a>
                                            </li>
                                            <li class="divider">
                                            <li>
                                                <a id="navbar-logout-link" href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Odjava
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
        
        <!-- Scripts -->
        <script src="/js/app.js"></script>
        
        @yield('scripts')
    </body>
</html>
