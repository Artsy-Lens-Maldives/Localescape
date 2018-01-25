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
                        <table id="taxi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>                            
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Accomodation Detail</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{ $booking->name }}</th>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->contact }}</td>
                                        <td>{{ $booking->room->accommodation->title }} - {{ $booking->room->room_type }}</td>
                                        <td>{{ $booking->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a style="margin:1px" class="btn btn-warning" href="">Delete Request</a>
                                            <a style="margin:1px" class="btn btn-info" href="">View</a>
                                        </td>
                                    </tr>                            
                                    @endforeach
                                </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
