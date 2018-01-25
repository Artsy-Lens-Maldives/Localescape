@extends('layouts.app')

@section('content')
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <nav class="navbar navbar-inverse">
                    <a class="navbar-brand" href="#">Welcome {{ Auth::user()->name }}</a>
                        <ul class="nav navbar-nav navbar-right">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Customer Dashboard</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Navigation <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ url('/bookings') }}">All Bookings</a></li>
                                                <li><a href="{{ url('/inquiries') }}">All Inquiries</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="{{ url('/settings') }}">Settings</a></li>
                                          </ul>
                                      </li>
                                </ul>
                            </div>
                        </ul>
                 </nav>
                 <div class="panel-body">
                    Your Email is : {{ Auth::user()->email }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
