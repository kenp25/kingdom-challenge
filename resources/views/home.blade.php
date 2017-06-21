@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row" style="padding: 10px">
        @if(count($challenges))
            @foreach($challenges as $challenge)
                <a href="{{ url('/challenge',$challenge->day) }}">
                    <div class="outer">
                        <div class="col-md-3">
                            <div class="box">
                                <div class="box-title">
                                    <h4>{{"Day ".$challenge->day." ".$challenge->name}}</h4>
                                </div>
                                <img class="img img-responsive" src="{{ asset("img/video.png") }}" alt="Card image cap">

                            </div>
                        </div>
                    </div>


                </a>

            @endforeach



        @else
            <div>No Challenges Yet</div>

        @endif
    </div>
</div>
@endsection
