@extends('layouts.admin')

@section('title')
    <span><i class="fa fa-cog"></i> Settings</span>
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
          <label class="control-label col-sm-2" for="categories">Categories</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="categories" placeholder="Site categories" value="{{ $settings->categories }}" name="categories">
            <p class="help-block">Sperate each category with a comma Eg: Hotel,Resort,Guest House</p>
            <ul>
              <strong><p class="help-block">List of categories</p></strong>
              @foreach($categories as $category)
                <li>{{ $category }}</li>
              @endforeach
            </ul>
          </div>
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Save</button>
          </div>
        </div>
      </form>
    </div>

@endsection