@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 50px">
{{--        @if(count($challenges))
            @else
            Nothing to show
            @endif--}}
        <div class="col-md-9">
            @if($challenge->hasBeenSent())
                <div>
                    <h4>{{"Day ". $challenge->day . " | ". $challenge->name }}</h4>
                </div>
                <video controls style="width: 100%;" autoplay preload="auto" controlsList="nodownload">
                    <source src="{{ url($challenge->video) }}" type="video/mp4">
                    <source src="{{ url($challenge->video) }}" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            @else
                <h1>You cannot Watch This Video Now.</h1>
            @endif

        </div>
        <div class="col-md-3">
            <div>
                <h4>Challenge Videos</h4>
            </div>

            <ol>
                @foreach($challenges as $challenge)
                    <li><a href="{{ url('challenge',$challenge->day) }}">{{"Day ".$challenge->day. " ".$challenge->name}}</a></li>
                @endforeach
            </ol>

            {{ $challenges->links() }}

            <div>
                <h4>Challenge Audios</h4>
            </div>

            <ol>
                @foreach($challenges as $challenge)
                    @if($challenge->audio)
                        <li><a href="{{ url('challenge/audio', $challenge->day) }}">{{"Day ".$challenge->day. " ".$challenge->name}}</a></li>
                    @else
                        <li>{{ "Day ". $challenge->day }} Audio not available</li>
                    @endif
                @endforeach


            </ol>

            {{ $challenges->links() }}


        </div>
    </div>
</div>
    @include('partials.footer ')
@endsection