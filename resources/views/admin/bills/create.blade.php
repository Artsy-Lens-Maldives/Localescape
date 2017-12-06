@extends('layouts.admin')

@section('title')
    <span>Add Bill</span>
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
          <label class="control-label col-sm-2" for="pdf_link">Upload PDF</label>
          <div class="col-sm-10">
            <input type="file" name="pdf_link" id="pdf_link">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="description" name="description">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="due_date">Due Date</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="due_date" name="due_date">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="price">Price</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="price" name="price">
          </div>
        </div>        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </div>

@endsection