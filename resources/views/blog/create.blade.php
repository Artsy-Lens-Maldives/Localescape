@extends('layouts.admin')

@section('title')
    <span>Add Blog Post</span>
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
            <input type="file" name="image">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Blog Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" placeholder="Your Blog Title" name="title">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Blog Post</label>
          <div class="col-sm-10">          
            <textarea name="description" form="form-control"  id="description" placeholder="" style="width: 100%;" rows="30" ></textarea>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Author</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="author" placeholder="Author Name" name="author">
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