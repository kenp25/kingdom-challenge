@extends('layouts.app')

@section('title')
    About Kingdom Challenge
    @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p align="left"><a name="_GoBack"></a> <span style="color: #ff0000;"> <span style="font-family: Ubuntu;"><span style="font-size: x-large;"><strong>About The Kingdom Challenge</strong></span></span></span></p>
                <p align="left"><span style="font-family: Ubuntu;"><span style="font-size: xx-large;">K</span>ingdom Challenge is a life-transforming programme with a mission &ldquo;<span style="color: #ff0000;"><strong>To &ldquo;Inspire, Promote and Celebrate Wisdom.&rdquo; </strong></span><em>You want the absolute best way to transform your life...crush your goals...get in great shape... become debt free...skyrocket, double your income and achieve ANY goal you want in record time? </em><strong>This is it</strong>.</span></p>
                <p align="left">&nbsp;</p>
                <p align="left"><span style="font-family: Ubuntu;"><span style="color: #ff0000;"><strong>Meet Your Life Coach</strong></span><strong> Julius Peter Oyet</strong>: Founder, Entrepreneur, Motivational Speaker and Life Coach. <span style="color: #000000;">Julius is the Chairman of Kingdom Group of Companies with over 115 Business Companies including Kingdom City, Kingdom Challenge, Kingdom Executive Coaching, Kingdom University, Kingdom Hospital, Kingdom Stadium, Kingdom Agriculture, Kingdom Transport and more. The Kingdom Challenge is a </span><span style="color: #ff6600;"><span style="font-size: large;"><strong>Serious Programme For</strong></span></span> <span style="color: #ff6600;"><span style="font-size: large;"><strong>Serious People With Serious Goals</strong></span></span><span style="color: #ff6600;"><span style="font-size: large;"><strong>!</strong></span></span><span style="color: #000000;"> It is a proven model that produces the highest levels of performance. Like any world-class competition...it contains the elements necessary for unleashing your greatness: rules, performance standards, accountability, a scoreboard, a finish line, competition and most of all fun. Designed for the bold, ambitious and courageous...take The Kingdom Challenge for 100 days. It will challenge you on many levels.</span></span></p>
                <p align="left"><span style="font-family: Ubuntu;">As a Coach, I have no idea what you want...and have no business telling you what to want. <strong>My job is to help you get it in the fastest, most efficient manner possible.</strong> <span style="color: #ff0000;"><strong>The Kingdom Challenge</strong></span> is a hard core performance acceleration system will do just that. Not only will you get what you want, but <strong>you'll get it faster and with the least possible effort.</strong> Notice...I said you'll get what you want "faster" and with the "least possible effort" &mdash; <span style="color: #ff0000;"><strong>I Did Not Say That It Would Be Easy</strong></span><span style="color: #ff0000;"><strong>.</strong></span></span></p>
                <p align="left"><span style="font-family: Times, serif;"><span style="font-size: small;"><span style="font-family: Ubuntu;"><span style="font-size: medium;"><strong>Why is it called the Kingdom Challenge?</strong></span></span></span></span></p>
                <p align="left"><span style="font-family: Times, serif;"><span style="font-size: small;"><span style="font-family: Ubuntu;"><span style="font-size: medium;">Bishop Julius Peter Oyet, The Coach is the Chairman of Kingdom Group of Companies with 115 Business Companies including Kingdom Challenge. The Kingdom Challenge is a proven model that produces the highest levels of performance. Like any world-class competition...</span></span><strong><span style="font-family: Ubuntu;"><span style="font-size: medium;">it contains the elements necessary for unleashing your greatness: rules, performance standards, accountability, a scoreboard, a finish line, competition and most of all fun.</span></span></strong></span></span></p>
                <p align="left"><span style="font-family: Ubuntu;"><span style="font-size: small;"><span style="font-size: medium;">Designed for the bold, ambitious and courageous...take The Kingdom Challenge for 100 days. It will challenge you on many levels. You will be challenged to consider what you believe about your potential, your ability to drive big results fast, and your appetite for hard work.</span></span></span></p>
                <p align="left"><span style="font-family: Times, serif;"><span style="font-size: small;"><strong><span style="font-family: Ubuntu;"><span style="font-size: medium;">You will be challenged to confront your fears, proactively move through resistance, test your limits, beat deadlines, act with boldness...and take massive action to ensure that you get more accomplished in 100 days than most people do over the course of ten years.</span></span></strong></span></span></p>
                <p align="left"><span style="font-family: Ubuntu;"><span style="font-size: small;"><span style="font-size: medium;">I created the Kingdom Challenge to share with you the same methods I have used to succeed in many things including creating over 100 companies, complete several goals even before deadlines, and quickly grow a number of successful businesses, and coach people to extraordinary, legacy defining performances.</span></span></span></p>
                <p align="left"><span style="font-family: Times, serif;"><span style="font-size: small;"><span style="font-family: Ubuntu;"><span style="font-size: medium;">I accept full responsibility for inspiring people to do insane things like climb mountains in Africa, run their first marathon, launch their own businesses, and say bye to their comfort zone...forever. </span></span><strong><span style="font-family: Ubuntu;"><span style="font-size: medium;">I'm confident I can do the same for you.</span></span></strong></span></span></p>
                <p align="left"><span style="font-family: Times, serif;"><span style="font-size: small;"><span style="font-family: Ubuntu;"><span style="font-size: medium;">While I can't promise that you'll be taller, better looking or have improved gas mileage as a result of your participation in The Kingdom Challenge... </span></span><strong><span style="font-family: Ubuntu;"><span style="font-size: medium;">I can promise that you're just 100 days from transforming your life and achieving ANY goal you want in record time.</span></span></strong></span></span></p>
                <p align="left"><span style="font-family: Ubuntu;">Forget everything you know about goal setting. The Kingdom Challenge has cracked the code for how to achieve more results in just 100 days than most people do over the course of ten years.</span></p>
                <p align="left">&nbsp;</p>
                <p align="left"><span style="font-family: Ubuntu;">Until we talk again, keep growing strong, big and never forget; Wisdom Is The Principle Thing!</span></p>
                <p align="left">&nbsp;</p>
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
                    <li><a href="{{ url('about') }}">About the Kingdom Challenge</a></li>
                    <li><a href="{{ url('benefits-of-joining-kingdom-challenge') }}">Fourteen Benefits Of Joining Kingdom Challenge</a></li>
                    <li><a href="{{ url('consquencies') }}">The Consquences of Not being Challenged</a></li>
                    <li><a href="{{ url('seven-reasons-for-loving-kingdom-challenge') }}">The Top 7 Reasons Why People Love The Kingdom Challenge</a></li>
                    <li><a href="{{ url('ten-benefits-of-a-challenge') }}">Ten benefits of a challenge</a></li>
                    <li><a href="{{ url('now-are-you-ready') }}">Now are you ready for a challenge?</a></li>
                    <li><a href="{{ url('auth/register') }}">Register now</a></li>
                </ol>
            </div>
        </div>
    </div>
    @include('partials.footer')
    @endsection