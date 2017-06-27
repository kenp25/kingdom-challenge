@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div><h3>The Top 7 Reasons Why People Love The Kingdom Challenge</h3></div>
                <div>
                    <h4>1. IT’S ALL ABOUT EXECUTION</h4>
                    <p>We are in the Success Business, and understand that the marketplace only rewards implementation. From the moment you begin, you will learn a series of rapid execution strategies and challenged to relentlessly apply them in the fast tracking of your goals.</p>
                </div>
                <div>
                    <h4>2. TESTS YOUR LIMITS</h4>
                    <p>When you rise to meet a challenge, you will never be the same again.   You either cope or crumble.  You become better or bitter.  You emerge stronger or weaker. It has to be this way, as a challenge exists to tests your limits, to push you beyond the breaking point, and to separate you from the herd.</p>
                </div>
                <div>
                    <h4>3. FOCUS ON RESULTS</h4>
                    <p>We know that the greatest waste of untapped resources in this world are the hopes, dreams, goals and ideas that don’t translate into actual results. You’ll learn to focus on results so that you are consistently moving the needle and accelerating progress</p>
                </div>
                <div>
                    <h4>4. SENSE OF URGENCY</h4>
                    <p>We’re well aware that success loves and rewards speed of execution and why it is a devastating competitive advantage. You’ll learn to compress the amount of time and it takes to turn any goal, idea, project or problem into a highly successful outcome</p>
                </div>
                <div>
                    <h4>5. ACCOUNTABILITY</h4>
                    <p>You’ll love The Kingdom Challenge because we remove the excuses and barriers to poor execution and replace them with the tough love disciplines you need to perform at your best. Accountability for results is vigilantly enforced.</p>
                </div>
                <div>
                    <h4>6. PROVEN, REPEATABLE PROCESS</h4>
                    <p>The Kingdom Challenge has been vetted and implemented with great success by people all over the world to achieve their goal faster than they ever imagined. It is a proven, repeatable process that virtually guarantees success time after time.</p>
                </div>
                <div>
                    <h4>7. CALLS FOR AN INDOMITABLE SPIRIT</h4>
                    <p>It is irresponsible to take on a big challenge without the will, heart, and mindset to win it, as nothing can withstand the power of an indomitable spirit. In your efforts to rise to meet a challenge, you will be buffeted and pummelled.  You will be criticized and opposed.  You will be attacked and assaulted.  You will struggle and fall.  Your commitment will be relentlessly tested, and that is precisely why Kingdom Challenge calls for an indomitable, unconquerable spirit. Having an indomitable spirit means that you have the type of spirit incapable of being overcome, subdued, or vanquished</p>
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