@extends('layouts.app')

@section('title')
    Welcome
@endsection()

@section('content')
    @include('partials.slider')
    @include('partials.about')
    @include('partials.subscription')
    @include('partials.footer')
@endsection