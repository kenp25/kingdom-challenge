@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @elseif(Session::has('warning'))
                        <div>
                            {{ Session::get('warning') }}
                        </div>
                    @endif
                <div class="form">

                    <div class="form-header"><h3>Register For Kingdom Challenge</h3></div>
                    <form action="{{ url('auth/register') }}" class="form-body" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" class="form-control" name="firstname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" class="form-control" name="lastname">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" type="text" name="phone">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input type="radio" name="gender" value="1">Male</input>
                                    <input type="radio" name="gender" value="2">Female</input>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="age">Age Group</label>
                                    <select name="age">
                                        <option class="form-control" value="1">18-25</option>
                                        <option class="form-control" value="2">26-35</option>
                                        <option class="form-control" value="3">36-40</option>
                                        <option class="form-control" value="4">41-50</option>
                                        <option class="form-control" value="5">51-60</option>
                                        <option class="form-control" value="5">61+</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Register</button>
                        <a href="https://ug.ubillsafrica.com/r/kingdomservices" class="btn btn-info" target="_blank">Make Payment</a>

                    </form>

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection