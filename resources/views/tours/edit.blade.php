@extends('layouts.admin')

@section('title')
    <span>Edit Tour Package</span>
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

      <form class="form-horizontal" action="{{ url()->current() }}" method="POST">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Package Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ $tour->name }}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Price</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="description" placeholder="Price" name="price"  value="{{ $tour->price }}">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Description</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="description" placeholder="Your Description" name="description" value="{{ $tour->description }}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Itenarary</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="itenarary" placeholder="Itenarary" name="itenarary" value="{{ $tour->itenarary }}">
          </div>
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>

      <hr>

      <h3>Tour Images</h3>
      @foreach($tour->photos as $image)
        <div class="clearfix col-lg-2 col-md-2 col-sm-4 col-xs-6" style="width: 200px; height:100%; margin-top: 10px; margin-bottom: 10px;">
            <a href="{{ Helper::s3_url_gen($image->thumbnail) }}" data-title="{{ $tour->name }}'s image" data-toggle="lightbox">
                <img class='img-responsive img-thumbnail' src="{{ Helper::s3_url_gen($image->thumbnail) }}" style="width: 200px; height:130px;">
            </a>
            <center>
                @if($image->main == '0')
                    <a href="{{ url()->current() }}/{{ $image->id }}/delete" onclick="return confirm('Are you sure you want to delete this image?');" class="btn btn-danger" style="margin-top: 3px;">Delete</a>
                    <a href="{{ url()->current() }}/{{ $image->id }}/main" class="btn btn-warning" style="margin-top: 3px;">Main Photo</a>        
                @else
                    <a href="" class="btn btn-warning disabled" style="margin-top: 3px;" disabled>Current Main</a>
                @endif
            </center>
            
        </div>
      @endforeach
    </div>
      <br>
      <hr>
      <form class="form-horizontal" action="{{ url()->current() }}/photo/new" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Upload New Image(s)</label>
          <div class="col-sm-10">
            <input type="file" name="image[]" multiple>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>

@endsection