@extends('layouts.app')

@section('content')


<div class="container">
<br>
<center><h2>Inquiry Form</h2></center>
<br>
      <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            
            @endif
        @endforeach
      </div>
      <div class="row">
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-body">
              <form class="form-horizontal" action="{{ url('inquiry') }}" method="POST">
                <input type="hidden" name="acco_id" value="{{ request()->accommodation }}">
                <input type="hidden" name="room_id" value="{{ request()->room }}">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Full Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ auth()->user()->name }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Email</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ auth()->user()->email }}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Contact Number</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="checkin" placeholder="Contact Number" name="contact">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Details</label>
                  <div class="col-sm-10">          
                    <textarea type="text" class="form-control" id="checkout" placeholder="Details about inquiry" name="details"></textarea>
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
          </div>
        </div>
        <div class="col-md-3">
          <div class="panel panel-success">
            <div class="panel-heading">Inquiry Summary</div>
            <div class="panel-body">
              <h3><strong>{{ $room->room_type }}</strong><h3>
              <img src="{{ Helper::s3_url_gen($room_photo->thumbnail) }}" class="img-responsive img-thumbnail" alt="{{ $room->room_type }} image">
              <hr>
              <h4>Inquiry info</h4>
              <ul>
                <li>
                  <div class="info">
                    Check In:
                  </div>
                  <div class="value">
                    {{ $check_in->format('d/m/Y') }}
                  </div>
                </li>
                <li>
                  <div class="info">
                    Check Out:
                  </div>
                  <div class="value">
                    {{ $check_out->format('d/m/Y') }}
                  </div>
                </li>
                <li>
                  <div class="info">
                    Nights:
                  </div>
                  <div class="value">
                    {{ $days }}
                  </div>
                </li>
                <li>
                  <div class="info">
                    Adults:
                  </div>
                  <div class="value">
                    {{ $adults }}
                  </div>
                </li>
                <li>
                  <div class="info">
                    Child:
                  </div>
                  <div class="value">
                    {{ $child }}
                  </div>
                </li>
              </ul>
              <hr>
              <h4>Room info</h4>
              <ul>
                <li>
                  <div class="info">
                    Total Adult: <strong>${{ $room->price_adult }}</strong> per Adult
                  </div>
                  <div class="value">
                    ${{ $tp_adult }}
                  </div>
                </li>
                <li>
                  <div class="info">
                    Total Child: <strong>${{ $room->price_child }}</strong> per Child
                  </div>
                  <div class="value">
                    ${{ $tp_child }}
                  </div>
                </li>
              </ul>
              <hr>
              <h4>Total Cost</h4>
              <ul>
                @if($tax->tax == '1')
                <li>
                  <div class="info">
                    Total Before Tax
                  </div>
                  <div class="value">
                    ${{ $total }}
                  </div>
                </li>
                <li>
                  <div class="info">
                    {{ $tax->tax_percentage }}% Tax
                  </div>
                  <div class="value">
                    ${{ $tax_total - $total }}
                  </div>
                </li>
                <li>
                  <div class="info">
                    Total After Tax
                  </div>
                  <div class="value" style="border-top: 1px solid;">
                    ${{ $tax_total }}
                  </div>
                </li>
                @else
                <li>
                  <div class="info">
                    Total
                  </div>
                  <div class="value">
                    ${{ $total }}
                  </div>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
    </div>

@endsection

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
    .info {
      float: left;
    }
    .value {
      float: right;
      font-weight: bold;
    }
  </style>
@endsection

@section('js')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  @include('sweet::alert')

@endsection