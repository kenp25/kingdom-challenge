<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kingdom Challenge') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body background=""text="blue" Alink="purple"link="red"vlink="green">
<header id="header" class="container-fluid" style="background-color: rgba(165, 42, 42, 0.7)">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <img class="img img-responsive" src="{{ asset('img/logo-4.png') }}" alt="Header">
            </div>

            <div class="col-md-8">
                <div><h3>KINGDOM CHALLENGE</h3></div>
                <span>To Inspire, Promote and Celebrate Success</span>
            </div>
        </div>
    </div>


</header>
</div>
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

                    </ul>

                </div>
            </div>
        </nav>
    @else
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
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

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li class="active"><a href="{{ url('about') }}">About Us</a></li>
                        <li class="active"><a href="{{ url('auth/register') }}">Register</a></li>
                        <li class="active"><a href="{{ 'auth/login' }}">Login</a></li>
                    </ul>

                </div>



            </div>
        </nav>

    @endif

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
        document.getElementById("count-down").innerHTML = days + "Days " + hours + "Hours "
            + minutes + "Minutes " + seconds + "Seconds ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>


</body>
</html>
