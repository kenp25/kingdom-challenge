@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                <div class="form">
                    <div class="form-header">
                        <h3>Edit User</h3>
                    </div>
                    <form action="" method="post" class="form-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input class="form-control" type="text" name="firstname" value="{{ $user->firstname }}">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input class="form-control" type="text" name="lastname" value="{{ $user->lastname }}">
                        </div>

                        <div class="form-group">
                            <label for="lastname">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ $user->email }}">
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


                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


@endsection