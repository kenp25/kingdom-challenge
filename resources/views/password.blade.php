@extends('layouts.app')

@section('title')
    Create password
    @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-header"><h3>Create Password</h3></div>
                    <form action=""  method="post" class="form-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Confrirm Password" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    @endsection