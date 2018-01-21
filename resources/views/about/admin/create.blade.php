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
          <label class="control-label col-sm-2" for="email">Title</label>
          <div class="col-sm-10">
            <input type="text" value="{{ $about->title }}" class="form-control" id="title" placeholder="Your Blog Title" name="title">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Description</label>
          <div class="col-sm-10">
            <textarea id="text-field" name="description">{{ $about->description }}</textarea>
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