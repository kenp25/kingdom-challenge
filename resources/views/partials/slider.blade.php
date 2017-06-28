<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <ul class="cb-slideshow slider">
                <li>
                    <span>Image 01</span><div><h2>Unleash Your</h2><h3>Awesomeness</h3></div>
                </li>
                <li>
                    <span>Image 02</span><div><h2>Unleash Your</h2><h3>Breakthrough</h3></div>
                </li>
                <li>
                    <span>Image 03</span><div><h2>Unleash Your</h2><h3>Creativity</h3></div>
                </li>
                <li>
                    <span>Image 04</span><div><h2>Unleash Your</h2><h3>Power</h3></div>
                </li>
                <li>
                    <span>Image 05</span><div><h2>Unleash Your</h2><h3>Dreams</h3></div>
                </li>
                <li>
                    <span>Image 06</span><div><h2>Unleash Your</h2><h3>Focus</h3></div>
                </li>

                <li>
                    <span>Image 07</span><div><h2>Unleash Your</h2><h3>Consistency</h3></div>
                </li>

                <li>
                    <span>Image 08</span><div><h2>Unleash Your</h2><h3>Genius</h3></div>
                </li>

                <li>
                    <span>Image 09</span><div><h2>Unleash Your</h2><h3>Intensity</h3></div>
                </li>

                <li>
                    <span>Image 10</span><div><h2>Unleash Your</h2><h3>Potential</h3></div>
                </li>

                <li>
                    <span>Image 11</span><div><h2>Unleash Your</h2><h3>Courage</h3></div>
                </li>

                <li>
                    <span>Image 12</span><div><h2>Unleash Your</h2><h3>Success</h3></div>
                </li>

                <li>
                    <span>Image 13</span><div><h2>Unleash Your</h2><h3>Talents</h3></div>
                </li>

                <li>
                    <span>Image 14</span><div><h2>Unleash Your</h2><h3>Will</h3></div>
                </li>

                <li>
                    <span>Image 15</span><div><h2>Unleash Your</h2><h3>Indomitable Spirit</h3></div>
                </li>
            </ul>
        </div>
        <div class="col-md-3">
            @if (Auth::guest())
                <nav class="clearfix guest">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('auth/register') }}">Register</a></li>
                        <li><a href="{{ url('auth/login') }}">Login</a></li>
                    </ul>
                </nav>


            @endif
            <div><h3>Quick Links</h3></div>
            <ol>
                <li><a href="{{ url('seven-reasons-for-loving-kingdom-challenge') }}">The Top 7 Reasons Why People Love The Kingdom Challenge</a></li>
                <li><a href="{{ url('about') }}">About the Kingdom Challenge</a></li>
                <li><a href="{{ url('benefits-of-joining-kingdom-challenge') }}">Benefits of joining Kingdom challenge</a></li>
                <li><a href="{{ url('consquencies') }}">The Consquences of Not being Challenged</a></li>
                <li><a href="{{ url('ten-benefits-of-a-challenge') }}">Ten benefits of a challenge</a></li>
                <li><a href="{{ url('now-are-you-ready') }}">Now are you ready for a challenge?</a></li>
            </ol>

            <div><h3>Calendar</h3></div>
            <div id="calendar"></div>

        </div>

    </div>
</div>



