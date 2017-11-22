@extends('layouts.app')

@section('content')


<div class="container">
<br>
<center><h2>Inquery Form</h2></center>
<br>
      <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            
            @endif
        @endforeach
      </div>
      <form class="form-horizontal" action="{{ url('inquery/create/success') }}" method="POST">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Full Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Email</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="email" placeholder="Email" name="email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Contact Number</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="contact" placeholder="Contact Number" name="contact">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Inquery Details</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="detailsr" placeholder="Inquery Details" name="details">
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