@extends('layouts.admin')

@section('title')
    <span>Add Tour Package</span>
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
          <label class="control-label col-sm-2" for="email">Upload Image(s)</label>
          <div class="col-sm-10">
            <input type="file" name="image[]" multiple>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Package Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Your Package Title" name="name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Price</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="description" placeholder="Price" name="price">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Description</label>
          <div class="col-sm-10">          
              <textarea name="description" form="form-control" id="text-field" placeholder="" style="width: 100%;" rows="30" ></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Itenarary</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="itenarary" placeholder="Itenarary" name="itenarary">
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
