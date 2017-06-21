@extends('layouts.app')

@section('title')
    About Kingdom Challenge
    @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div><h3>About</h3></div>
                <div>
                    <p>
                        Kingdom Challenge is a circle of Excellence where our Mission is To “Inspire, Promote And Celebrate Wisdom.” You want the absolute best way to transform your life...crush your goals...get in great shape... become debt free...skyrocket your sales and achieve ANY goal you want in record time? This is it.
                        From Bishop Julius Peter Oyet, The Founder of Kingdom Challenge!
                        I have no idea what you want...and have no business telling you what to want. My job is to help you get it in the fastest, most efficient manner possible. The Kingdom Challenge, a hardcore performance acceleration system will do just that. Not only will you get what you want, but you'll get it faster and with the least possible effort. Notice...I said you'll get what you want "faster" and with the "least possible effort" — I Did Not Say That It Would Be Easy.
                        Why is it called the Kingdom Challenge?
                    </p>
                    <p>
                        Bishop Julius Peter Oyet, The Coach is the Chairman of Kingdom Group of Companies with 115 Business Companies including Kingdom Challenge. The Kingdom Challenge is a proven model that produces the highest levels of performance. Like any world-class competition...it contains the elements necessary for unleashing your greatness: rules, performance standards, accountability, a scoreboard, a finish line, competition and most of all fun.
                        Designed for the bold, ambitious and courageous...take The Kingdom Challenge for 100 days. It will challenge you on many levels. You will be challenged to consider what you believe about your potential, your ability to drive big results fast, and your appetite for hard work.
                        You will be challenged to confront your fears, proactively move through resistance, test your limits, beat deadlines, act with boldness...and take massive action to ensure that you get more accomplished in 100 days than most people do over the course of ten years.

                    </p>

                    <p>
                        I created the Kingdom Challenge to share with you the same methods I have used to succeed in many things including creating over 100 companies, complete several goals even before deadlines, quickly grow a number of successful businesses, and coach people to extraordinary, legacy defining performances.
                        And I accept full responsibility for inspiring people to do insane things like climb Mount mountains in Africa, run their first marathon, launch their own businesses, and say bye to their comfort zone...forever. I'm confident I can do the same for you.
                        While I can't promise that you'll be taller, better looking or have improved gas mileage as a result of your participation in The Kingdom Challenge... I can promise that you're just 100 days from transforming your life and achieving ANY goal you want in record time.
                        Forget everything you know about goal setting. The Kingdom Challenge has cracked the code for how to achieve more results in just 100 days than most people do over the course of ten years.
                    </p>


                    <div><h3>Here's The Plan And How It Works</h3></div>
                    For the next 100 days...you need to do just 3 things.
                    <ol>
                        <li>Identify Five Challenging Goals....the ones that call out to you...come and get me. You must set challenging goals because if your goals don't challenge you, they cannot change you...so THINK BIGGER as you'll be competing at the highest level to ensure maximum performance gains.</li>
                        <li>Follow Your Kingdom Challenge for 100 days. You'll receive a new challenge lesson every day—for the next 100 days from the day of starting. Every challenge lesson is designed to move you DEMONSTRABLY closer to the transformational results you desire in 100 days by using the Principle of Compounded Effort.</li>
                        <li>Say Bye to Your Comfort Zone. You'll be pushed, harassed and harangued for the next 100 days as from the moment you begin...fears will be confronted, the bar will be raised higher, expectations will be through the roof, deadlines and accountability will be ruthlessly enforced...and each day your goal is to beat yesterday.</li>
                    </ol>
                    <div><h3>Do Those Things And You'll Get These Things</h3></div>
                    <ol>
                        <li>You'll make more progress in 100 days than most people do over the course of ten years.</li>
                        <li>You'll learn a proven system for driving radical results that you can use the rest of your life.</li>
                        <li>You'll develop an indomitable, relentless, unstoppable spirit that is awe-inspiring.</li>
                        <li>You'll build supreme self-confidence as your ability to rise to the mental demands and physical rigors of the Kingdom Challenge strengthens your core.</li>
                        <li>You'll find out what you are really capable of...GREATNESS.</li>
                    </ol>
                    Yes...I Want To Achieve My Goals Faster
                </div>
            </div>
            <div class="col-md-3">
                <div><h3>Quick Links</h3></div>
                <ol>
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