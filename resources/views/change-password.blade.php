@extends('layouts.app')

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
                @elseif(Session::has('success'))
                     <div>
                         {{ Session::get('success') }}
                     </div>
                @endif
                <div class="form">
                    <div class="form-header"><h3>Change Your Password</h3></div>
                    <form action="{{ url('change-password') }}" method="post" class="form-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Current Password" name="current_password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                        </div>

                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                </div>


            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


@endsection