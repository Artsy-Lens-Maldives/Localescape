@extends('layouts.admin')

@section('title')
    <span>Edit Booking Form</span>
@endsection

@section('content')
    
    <div class="container">
        <form class="form-horizontal" action="/admin/bookings/accommodations/{{ $booking->id }}/edit" method="POST">
            <input type="hidden" name="acco_id" value="{{ $booking->acco_id }}">
            <input type="hidden" name="room_id" value="{{ $booking->room_id }}">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Full Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $booking->name }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Email</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ $booking->email }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Check in date</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" value="{{ $booking->checkin }}" id="checkin" placeholder="Check In Time" name="checkin">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Check out date</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" value="{{ $booking->checkout }}" id="checkout" placeholder="Check Out Time" name="checkout">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Estimated Time Arrival</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="eta" placeholder="Check Out Time" name="eta" value="{{ $booking->eta }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Flight Number</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="flightnumber" placeholder="Flight Number" name="flightnumber" value="{{ $booking->flightnumber }}">
              </div>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Submit</button>
              </div>
            </div>
          </form>
    </div>

@endsection

@section('js')
    
<script>
    $(document).ready(function() {
        $('#bookings').DataTable();
    } );
</script>

@endsection