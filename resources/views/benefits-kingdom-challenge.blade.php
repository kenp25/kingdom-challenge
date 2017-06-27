@extends('layouts.app')

@section('title')
    Benefits of Joining Kingdom Challenge
    @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div><h3>Benefits of Joining Kingdom Challenge</h3></div>
                <div>
                    <p>
                        The genesis of the Kingdom Challenge began by fixating on one question: What Does It Take To Drive Radical Results—FAST?
                        When I solved that puzzle and put all of the pieces together, I knew if people followed it, that they would indeed be able to produce radical results—fast! So I’m now looking for people who are crazy enough to stick with me on this challenge for all 100 days.
                        Now it’s your turn to make the impossible possible!
                    </p>
                    Is the Kingdom Challenge hard?
                    Does it require discipline, accountability, hard work, sustained commitment and relentless action?
                    You bet it does, but the results are ridiculously huge and life changing!
                    <div>
                        <h3>What Do You Get With The Kingdom Challenge? </h3>
                    </div>
                    <div>
                        <p>
                            The benefits of participating in the Kingdom Challenge are numerous. You get everything you need for transforming your life...for crushing your goals ...getting in great shape... becoming debt free...skyrocketing your sales and income, and achieving ANY goal you want in record time.
                        </p>
                    </div>
                    <div><h4>100 Hard-core Notes and Video Challenge Lessons:</h4></div>
                    <p>The Kingdom Challenge does not mess around. These lessons are direct, intense and actionable...because if you want extreme results...you've got to go to the extreme.</p>
                    <div>
                        <h4>100 Hard-core Mp3 (Audio) Challenge Lessons:</h4>
                    </div>
                    <p>We want you taking action and winning all day long...and we want you to have easy 24/7 access to reinforce the challenge lesson while you drive, walk, jog or bike.</p>
                    <div>
                        <h4>Massive Action Plan:</h4>
                    </div>
                    <p>With this daily implementation plan, we’ve done all the “heavy lifting” for you. It includes 100 implementation strategies for getting maximum gain with minimum effort.</p>
                    <div>
                        <h4>Crash Course on Goal Setting:</h4>
                    </div>
                    <p>Forget everything you know about goal setting. This crash course is like getting an MBA on what it takes to inspire excellence and drive radical results—fast.
                    </p>
                    <div>
                        <h4>Daily Reminders:</h4>
                    </div>
                    <p>An aesthetically beautiful email will greet you each day for the next 100 days. It will lead you to your new lesson and strategy for crushing your goals.</p>
                    <div>
                        <h4>Daily Goal And Progress Journal:</h4>
                    </div>
                    <p>Each day requires a game plan, deadlines and accountability. This daily discipline will keep you focused, on track and progressively moving forward.</p>
                    <div>
                        <h4>Community Forum:</h4>
                    </div>
                    <p>Inspire and be inspired by high-performers from all over the world. You'll connect with other members, create friendships and enjoy rich conversations.</p>
                    <div>
                        <h4>Private Membership Site:</h4>
                    </div>
                    <p>Once you get your credentials...you'll immediately have access to a private hangout for high achievers who are making big things happen in the world.</p>
                    <div>
                        <h4>Goal Setting Forms:</h4>
                    </div> Your life changes the moment you set and commit to a big challenging goal. These forms will help you navigate your way to a bigger, bolder future.
                    <div>
                        <h4>Force Multipliers:</h4>
                    </div> Most people spend their lives playing addition...but Kingdom Challenge is a game of multiplication. You'll learn proven strategies for making large performance gains.
                    <div>
                        <h4>After Action Reviews (Aar):</h4>
                    </div> AAR‘s are weekly measurement tools aimed squarely at driving a persistent improvement in skill, knowledge, accountability and overall results.
                    <div>
                        <h4>Live Weekly Training Call:</h4>
                    </div> Free access to a weekly training call led by Gary Ryan Blair. You'll get motivation, coaching and new insights on what it takes to live large.
                    <div>
                        <h4>Screen Savers & Inspirational Wallpaper:</h4>
                    </div> Make your phone, desktop and tablet come to life with these 100 stunning images and motivational messages...all designed to get your mojo working
                    <div>
                        <h4>Integrity Pledge:</h4>
                    </div> The Kingdom Challenge is more than just driving results...it's also about demonstrating excellence, character, integrity, and every noble virtue and best practice.
                    “I believe that if you are going to work hard to achieve a goal, then you owe it to yourself to find the fastest way to get it done. The Kingdom Challenge IS the fastest way.”

                </div>
            </div>
            <div class="col-md-3">
                <nav class="clearfix guest">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('auth/register') }}">Register</a></li>
                        <li><a href="{{ url('auth/login') }}">Login</a></li>
                    </ul>
                </nav>
                <div><h3>Quick Links</h3></div>
                <ol>
                    <li><a href="{{ url('seven-reasons-for-loving-kingdom-challenge') }}">The Top 7 Reasons Why People Love The Kingdom Challenge</a></li>
                    <li><a href="{{ url('about') }}">About the Kingdom Challenge</a></li>
                    <li><a href="{{ url('benefits-of-joining-kingdom-challenge') }}">Benefits of joining Kingdom challenge</a></li>
                    <li><a href="{{ url('consquencies') }}">The Consquences of Not being Challenged</a></li>
                    <li><a href="{{ url('ten-benefits-of-a-challenge') }}">Ten benefits of a challenge</a></li>
                    <li><a href="{{ url('now-are-you-ready') }}">Now are you ready for a challenge?</a></li>
                </ol>
            </div>
        </div>
    </div>
    @include('partials.footer')
    @endsection