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
    <div class="text-center count-down bg-info">Lessons Start on 22nd september, 2017</div>
    <div class="text-center count-down bg-info"><span id="count-down"></span></div>
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
                            <a href="{{ url('today') }}">
                                Today's lesson
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('member/welcome') }}">
                                Welcome
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                Navigation <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('member/lessons') }}">
                                        Challenge Lessons
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('unleash-greatness') }}">
                                        Unleash Your Greatness
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('forum') }}">
                                        Achiever's Forum
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('aar') }}">
                                        After Action Review
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

                                <li>
                                    <a href="{{ url('partner') }}">
                                        Accountability Partner
                                    </a>
                                </li>

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

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">Hello, {{ Auth::user()->fullName() }}<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('change-password') }}">
                                        Change password
                                    </a>
                                </li>

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




{{--                        <li>
                            <a>Hello, {{ Auth::user()->fullName() }}</a>
                        </li>--}}


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


<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Sep 22, 2017 00:00:00").getTime();

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

        // Display the result in the element with id="demo"
        document.getElementById("count-down").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>


</body>
</html>
