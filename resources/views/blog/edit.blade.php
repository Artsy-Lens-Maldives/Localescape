@extends('layouts.admin')

@section('title')
    <span>Edit Blog Post</span>
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
          <label class="control-label col-sm-2" for="email">Blog Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" placeholder="Your Blog Title" name="title" value="{{ $blog->title }}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Short Description</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="short_description" placeholder="Write a short description to show in all blog post section" name="short_description" value="{{ $blog->short_description }}">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Blog Post</label>
          <div class="col-sm-10">          
            <textarea name="description" form="form-control" id="text-field" placeholder="" style="width: 100%;" rows="30" value="{{ $blog->description }}" ></textarea>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Author</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="author" placeholder="Author Name" name="author" value="{{ $blog->author }}">
          </div>
        </div>
        
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Edit Blog Post</button>
          </div>
        </div>
      </form>
      <hr>
      @foreach ($blog->photos as $image)
      <div class="clearfix col-lg-2 col-md-2 col-sm-4 col-xs-6" style="width: 200px; height:100%; margin-top: 10px; margin-bottom: 10px;">
        <a href="{{ Helper::s3_url_gen($image->thumbnail) }}" data-title="Blog image" data-toggle="lightbox">
          <img class='img-responsive img-thumbnail' src="{{ Helper::s3_url_gen($image->thumbnail) }}" style="width: 200px; height:130px;">
        </a>
      </div>
      @endforeach
      <form class="form-horizontal" action="{{ url()->current() }}/photo" method="POST" enctype="multipart/form-data">        
        <h3>Replace or Upload new Blog photo</h3>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">New Image</label>
          <div class="col-sm-10">
            <input type="file" name="image">
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

@section('css')
  <link rel="stylesheet" href="{{ url('css/froala_editor.pkgd.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
@endsection

@section('js')
  <script src="{{ url('js/froala_editor.pkgd.min.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script>
    $(function() {
      $('#text-field').froalaEditor({
        toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', '-', 'insertLink', 'insertTable', '|', 'emoticons', 'specialCharacters', 'insertHR', 'selectAll', 'clearFormatting', '|', 'help', 'html', '|', 'undo', 'redo'],
        pluginsEnabled: null
      })
    });
  </script>
@endsection