@extends('layouts.admin')

@section('title')
    <span>Add New Facility</span>
@endsection

@section('content')
    
    <div class="container">
      <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            
            @endif
        @endforeach
      </div>
      <form class="form-horizontal" action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">        
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Facility Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Your Facility Name" name="name" value="{{ $facility->name }}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Icon Tutorial</label>
          <div class="col-sm-10">
            <p class="help-block">1) Go to this link to find Icons <b><a href="http://fontawesome.io/icons/">Font awesom page</a></b></p>
            <p class="help-block">2) Search any thing you want eg:Hotel</p>
            <p class="help-block">1) Copy the fa icon text and paste to the icon field eg:fa-bed</p>
            <div class="row">
              <div class="col-md-6">
                <a href="{{ url('img/tutorials/facilities/1.png') }}">
                  <img class="img-responsive img-thumbnail" src="{{ url('img/tutorials/facilities/1.png') }}" width="100%">
                </a>
              </div>  
              <div class="col-md-6">
                <a href="{{ url('img/tutorials/facilities/1.png') }}">
                  <img class="img-responsive img-thumbnail" src="{{ url('img/tutorials/facilities/2.png') }}" width="100%">
                </a>
              </div>
            </div>    
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="fa_icon">Icon</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="fa_icon" placeholder="Your Icon" name="fa_icon" value="{{ $facility->fa_icon }}">
          </div>
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </div>

@endsection