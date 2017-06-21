

<div id="subsription">
    <div class="container">
        <div class="row">

            <div class="col-lg-2"></div>
            <div class="col-md-8">
                <div class="newsletter">Signup for our Newsletter</div>
                <form action="{{ url('subscriber/add') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-md-4"><input class="news-input" type="text" name="name" placeholder="Your Name"></div>
                        <div class="col-md-4"><input class="news-input" type="email"  placeholder="Your Email" name="email"></div>
                        <div class="col-md-4"><input class="submit news-input" type="submit" value="Submit"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>

        </div>

    </div>
</div>