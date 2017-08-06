@extends('layouts.app')

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
                    @elseif(Session::has('error'))
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
                    @elseif(Session::has('message'))
                        <div>
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="form-header"><h3>Upload Challenge Audio</h3></div>
                    <form action="" method="post" class="form-body" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input class="form-control" type="file" name="audio" >
                        </div>

                        <button type="submit" class="btn btn-success">Upload</button>
                    </form>
                </div>

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
@endsection