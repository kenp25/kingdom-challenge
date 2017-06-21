@extends('layouts.app')

@section('title')
    Administrator
    @endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 {{--col-md-offset-2--}}">
                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Users</div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hovered table-striped">
                                    <thead>
                                        <tr>
                                            <td>id</td>
                                            <td>firstname</td>
                                            <td>Last Name</td>
                                            <td>Email</td>
                                            <td>admin</td>
                                            <td>Paid</td>
                                            <td>Gender</td>
                                            <td>Age</td>
                                            <td>Verified</td>
                                            <td>Address</td>
                                            <td>Phone</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($users))
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->firstname}}</td>
                                                    <td>{{$user->lastname}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->admin}}</td>
                                                    <td>{{$user->paid}}</td>
                                                    <td>{{$user->gender}}</td>
                                                    <td>{{$user->age}}</td>
                                                    <td>{{$user->verified}}</td>
                                                    <td>{{$user->address}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td><a href="{{ url('admin/user/edit', $user->id) }}">Edit</a></td>
                                                </tr>

                                            @endforeach

                                        @else
                                            <div>Nothing to Show.</div>
                                        @endif
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Subscribers</div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hovered table-striped">
                                    <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                    </thead>
                                    <tbody>
                                    @if(count($subscribers))
                                        @foreach($subscribers as $subscriber)
                                            <tr>
                                                <td>{{$subscriber->id}}</td>
                                                <td>{{$subscriber->name}}</td>
                                                <td>{{$subscriber->email}}</td>
                                            </tr>


                                        @endforeach

                                    @else
                                        Nothing to Show.
                                    @endif
                                    </tbody>


                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Challenges</div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hovered table-striped">
                                    <thead>
                                    <tr>
                                        <td>Day</td>
                                        <td>Name</td>
                                        <td>video</td>
                                        <td>Audio</td>
                                        <td>Uploaded On</td>

                                    </thead>
                                    <tbody>
                                    @if(count($challenges))
                                        @foreach($challenges as $challenge)
                                            <tr>
                                                <td>{{$challenge->day}}</td>
                                                <td>{{$challenge->name}}</td>
                                                <td>{{$challenge->video}}</td>
                                                <td>{{$challenge->audio}}</td>
                                                <td>{{ $challenge->created_at->diffForHumans() }}</td>
                                                <td>
                                                    @if($challenge->audio == "")
                                                        <a href="{{ url('admin/audio/add/'.$challenge->id) }}">
                                                            Add audio
                                                        </a>
                                                    @endif

                                                </td>
                                            </tr>

                                        @endforeach

                                    @else
                                        <tr><td>Nothing to Show.</td></tr>
                                    @endif
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-2">
                <div>
                    <h3>Links</h3>
                </div>
                <ol>
                    <li><a href="{{ url('admin/challenge/add') }}">New Challenge</a></li>
                    <li><a href="{{ url('admin/newsletter/add') }}">New Newsletter</a></li>
                </ol>
            </div>


        </div>
    </div>

    @endsection