@extends('layouts.app')

@section('title')
    Login
    @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @elseif(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @elseif(Session::has('warning'))
                    <div class="alert alert-warning">
                        {{ Session::get('warning') }}
                    </div>

                @elseif(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @elseif(Session::has('message'))
                    <div class="alert alert-info">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="form">
                    <div class="form-header"><h3>Login to Kingdom Challenge</h3></div>
                    <form action="" method="post" class="form-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="checkbox" name="remember" style="display: inline">Remember me
                        </div>

                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                    <p>Not a member? <a href="{{ url('auth/register') }}">Register here</a></p>
                </div>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection

