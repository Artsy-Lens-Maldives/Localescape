@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <nav class="navbar navbar-inverse">
                    <a class="navbar-brand" href="#">Welcome {{ Auth::user()->name }}</a>
                    <ul class="nav navbar-nav navbar-right">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/home') }}">Customer Dashboard</a></li>
                                <li><a href="{{ url('/home/bookings') }}">All Bookings</a></li>
                                <li><a class="active" href="{{ url('/home/inquiries') }}">All Inquiries</a></li>
                                <li><a href="{{ url('/home/settings') }}">Settings</a></li>
                            </ul>
                        </div>
                    </ul>
                </nav>
                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
