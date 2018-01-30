@extends('layouts.admin-home')

@section('content')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_content">
                        <h4>Recent Booking</h4>
                        <table id="taxi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>                            
                                <th>Accomodation Booked</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_bookings as $booking)
                            <tr>
                                <td>{{ $booking->room->accommodation->title }} - {{ $booking->room->room_type }}</td>
                                <td>{{ $booking->checkin }}</td>
                                <td>{{ $booking->checkout }}</td>
                                <td>{{ $booking->price }}</td>
                                <td>{{ $booking->created_at->toFormattedDateString() }}</td>
                                @if ($booking->booking_confirmed == 1)
                                    <td>
                                        <button class="btn btn-success disabled">Confirmed</button>
                                    </td>
                                @else 
                                <td>
                                    <button class="btn btn-danger disabled">Not Confirmed</button>
                                </td>
                                @endif
                            </tr>                            
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <hr>
                    <div class="x_content">
                        <h4>Recent Inquires</h4>
                        <table id="taxi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>                            
                                <th>Accomodation Detail</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_inquires as $booking)
                            <tr>
                                <td>{{ $booking->room->accommodation->title }} - {{ $booking->room->room_type }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->contact }}</td>
                                <td>{{ $booking->created_at->toFormattedDateString() }}</td>
                            </tr>                            
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div class="x_content">
                        <h4>Recent Cutomers</h4>
                        <table id="taxi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>                            
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_customers as $booking)
                            <tr>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->mobile }}/{{ $booking->phone }}</td>
                                <td>{{ $booking->street }}/{{ $booking->zip }}/{{ $booking->city }}/{{ $booking->state }}/{{ $booking->country }} </td>
                                <td>{{ $booking->created_at->toFormattedDateString() }}</td>
                            </tr>                            
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_content">
                        <h4>Recent Booking</h4>
                        <table id="taxi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>                            
                                <th>Accomodation Booked</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_bookings as $booking)
                            <tr>
                                <td>{{ $booking->room->accommodation->title }} - {{ $booking->room->room_type }}</td>
                                <td>{{ $booking->checkin }}</td>
                                <td>{{ $booking->checkout }}</td>
                                <td>{{ $booking->price }}</td>
                                <td>{{ $booking->created_at->toFormattedDateString() }}</td>
                                @if ($booking->booking_confirmed == 1)
                                    <td>
                                        <button class="btn btn-success disabled">Confirmed</button>
                                    </td>
                                @else 
                                <td>
                                    <button class="btn btn-danger disabled">Not Confirmed</button>
                                </td>
                                @endif
                            </tr>                            
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <hr>
                </div>
            </div>
             <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_content">
                        <h4>Recent Inquires</h4>
                        <table id="taxi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>                            
                                <th>Accomodation Detail</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recent_inquires as $booking)
                            <tr>
                                <td>{{ $booking->room->accommodation->title }} - {{ $booking->room->room_type }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->contact }}</td>
                                <td>{{ $booking->created_at->toFormattedDateString() }}</td>
                            </tr>                            
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile fixed_height_320">
                <div class="x_content">
                <h4>Recent Cutomers</h4>
                <table id="taxi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>                            
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recent_customers as $booking)
                    <tr>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->mobile }}/{{ $booking->phone }}</td>
                        <td>{{ $booking->street }}/{{ $booking->zip }}/{{ $booking->city }}/{{ $booking->state }}/{{ $booking->country }} </td>
                        <td>{{ $booking->created_at->toFormattedDateString() }}</td>
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