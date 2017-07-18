@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
            <div>
                <h4>{{"Day ". $challenge->day . " ". $challenge->name }}</h4>
            </div>
            <video controls style="width: 100%;" autoplay preload="auto" controlsList="nodownload">
                <source src="{{ url($challenge->video) }}" type="video/mp4">
                <source src="{{ url($challenge->video) }}" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>

@endsection