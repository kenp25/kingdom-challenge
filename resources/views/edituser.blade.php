@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
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


                        <div class=" form-group">
                            <label for="admin">Admin</label>
                            <select name="admin" id="" class="form-control" selected="{{ $user->admin }}">
                                <option value="1">Admin</option>
                                <option value="0">Normal user</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="paid">Paid</label>
                            <select name="paid" id="" class="form-control">
                                <option value="1">Paid</option>
                                <option value="0">Not paid</option>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


@endsection