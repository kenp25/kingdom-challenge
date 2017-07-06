<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    {{--        <div class="text-center count-down bg-info">Challenge Lessons Start on 1st July, 2017</div>
            <div class="text-center count-down bg-info"><span id="count-down"></span></div>--}}
    @if(Auth::user())
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    {{--                    <a class="navbar-brand" href="{{ url('/') }}">
                                            {{ config('app.name', 'Laravel') }}
                                        </a>--}}

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <!-- Authentication Links -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('member/lessons') }}">
                                Challenge Lessons
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('member/welcome') }}">
                                Welcome
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('unleash-greatness') }}">
                                Unleash Your Greatness
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('ten-rules') }}">
                                The Ten Rules Of The Kingdom Challenge
                            </a>
                        </li>


                        <li>
                            <a href="{{ url('commitment-to-excellence') }}">
                                Commitment to ExcellenceCommitment to Excellence
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('now-are-you-ready-2') }}">
                                Now Are You Ready For A Challenge?
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('top-ten-tips') }}">
                                Top 10 Tips For Maximizing Kingdom Challenge
                            </a>
                        </li>



                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->fullName() }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    @endif

    <div>
        <img class="img img-responsive" src="{{ asset('img/header.gif') }}" alt="Header">
    </div>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script>
    $('#calendar').datepicker({
        inline: true,
        firstDay: 1,
        showOtherMonths: true,
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });
</script>



</body>
</html>
