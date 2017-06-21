@extends('layouts.app')

@section('title')
    Add Challenge
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
                    <div>
                        {{ Session::get('warning') }}
                    </div>

                @elseif(Session::has('success'))
                    <div>
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="form">

                    <div class="form-header"><h3>Add a Challenge</h3></div>
                    <form action="{{url('/admin/challenge/add')}}" method="post" class="form-body" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="day">Day</label>
                            <select name="day" id="day">
                                @for($i=1; $i<=100; $i++)
                                    <option value={{$i}}>{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Challenge Name" name="name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="file" name="video" >
                        </div>

                        <button type="submit" class="btn btn-success">Upload</button>
                    </form>

                </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    @endsection