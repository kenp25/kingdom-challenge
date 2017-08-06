@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
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

                    <div class="form-header"><h3>Register a User</h3></div>
                    <form action="" class="form-body" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" type="text" name="phone" value="{{ old('phone') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="c_password">Confirm Password</label>
                                    <input class="form-control" type="password" name="password_confirmation">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class=" form-group">
                                    <label for="admin">Admin</label>
                                    <input type="radio" name="admin" value="1">Admin</input>
                                    <input type="radio" name="admin" value="0" checked="checked">Normal User</input>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="paid">Paid</label>
                                    <input type="radio" name="paid" value="1" checked="checked">Paid</input>
                                    <input type="radio" name="paid" value="0">Not paid</input>
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
                            <textarea class="form-control" name="address" rows="5">{{ old('address') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Register</button>

                    </form>

                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


@endsection