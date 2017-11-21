@extends('layouts.admin')

@section('content')
    
    <div class="container">
    <h2>Horizontal form</h2>
      <form class="form-horizontal" action="store" method="POST">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Blog Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" placeholder="Your Blog Title" name="title">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Description</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="description" placeholder="Your Description" name="description">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Author</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="author" placeholder="Author Name" name="author">
          </div>
        </div>
        
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    </div>

@endsection