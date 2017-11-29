@extends('layouts.admin')

@section('content')
    
    <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Extranet</a></li>
                <li><a href="#">Accommodations</a></li>
                <li class="active">Submit</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1>Approve {{ $acco->title }} <a href="{{ url('extranet/accommodations') }}" class="btn btn-lg btn-success">Go Back</a> </h1>
                </div>
                <!--end title-->
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        
                        @endif
                    @endforeach
                </div>
                
                <form class="form-horizontal" action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Status</label>
                        <div class="form-group">
                                <label class="no-margin"><input type="checkbox" value="1" name="approve"
                                @if($acco->approve == '1')
                                    checked
                                @else
                                    
                                @endif
                                >Approve</label>
                            </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" value="{{ $acco->status }}" name="status">
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->

@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" type="text/css" />

    <style>
    .grid-item {
        width: 100%;
        height: 130px;
    }
    </style>
@endsection

@section('js')
    <script type="text/javascript" src="/js/jQuery.MultiFile.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script> 
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            alwaysShowClose: true,
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
@endsection