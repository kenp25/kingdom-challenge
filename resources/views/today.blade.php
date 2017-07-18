@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
            <div>
                <h4>{{"Day ". $challenge->day . " | ". $challenge->name }}</h4>
            </div>
            <video controls style="width: 100%;" autoplay preload="auto" controlsList="nodownload">
                <source src="{{ url($challenge->video) }}" type="video/mp4">
                <source src="{{ url($challenge->video) }}" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="row" style="padding: 5px 0px 15px 0px;">
        Audio:
        @if($challenge->audio)
            <a href="{{ url('challenge/audio', $challenge->day) }}">{{"Day ".$challenge->day. " ".$challenge->name}}</a>
        @else
            No audio available
        @endif
    </div>
</div>



    @include('partials.footer')

@endsection