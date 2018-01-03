@extends('layouts.extranet')

@section('content')
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Extranet</a></li>
                <li class="active">Accommodations</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1><a href="#">My Accommodations</a> <a style="margin:1px" class="btn btn-success" href="{{ url()->current() }}/add">Add Accommodation</a></h1>
                </div>
                <div class="">
                    @if(!$accommodations->isempty())
                        @foreach($accommodations as $accommodation)
                            <div class="item list">
                                <div class="image-wrapper">
                                    @if($accommodation->top_acco == "1")
                                        <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>    
                                    @endif
                                    <div class="image">
                                        <a href="{{ url()->current() }}/preview/{{ $accommodation->id }}" class="wrapper">
                                            <div class="gallery">
                                                @foreach($accommodation->photos as $photo)
                                                    @if($photo->main == '1')
                                                        <img src="{{ Helper::s3_url_gen($photo->thumbnail) }}" alt="">
                                                    @else
                                                        <img src="#" class="owl-lazy" alt="" data-src="{{ Helper::s3_url_gen($photo->thumbnail) }}">
                                                    @endif
                                                @endforeach
                                            </div>
                                        </a>
                                        <!--end map-item-->
                                        <div class="owl-navigation"></div>
                                        <!--end owl-navigation-->
                                    </div>
                                </div>
                                <!--end image-->
                                <div class="description">
                                    <!-- <div class="meta">
                                        <span><i class="fa fa-star"></i>8.9</span>
                                        <span><i class="fa fa-bed"></i>365</span>
                                    </div> -->
                                    <!--end meta-->
                                    <div class="info">
                                        <a href="{{ url()->current() }}/preview/{{ $accommodation->id }}"><h3>{{ $accommodation->title }}</h3></a>
                                        <figure class="label label-info">{{ Helper::un_slug_gen($accommodation->type) }}</figure>
                                        <h4>Information and tips for your accommodation</h4>
                                        <ul>  
                                            @if($accommodation->active == '1')
                                                <li>Your accommodation has been aproved and is now visible on the website</li>
                                            @else
                                                <li>You accommodation has not been aproved yet, Try following the tips listed below</li>
                                            @endif

                                            @if($accommodation->photos->count() < 15)
                                                <li>Try adding atleast 15 photos to your accommodation, Now added {{ $accommodation->photos->count() }} of 15 Photos</li>
                                            @else
                                                <li>You have added {{ $accommodation->photos->count() }} photos to your accommodation</li>
                                            @endif

                                            @if($accommodation->rooms->count() < 1)
                                                <li>Try adding atleast 1 room to your accommodation</li>
                                            @else
                                                <li>You have added {{ $accommodation->rooms->count() }} room(s) to your accommodation</li>
                                            @endif

                                            @if($accommodation->top_acco == "1")
                                                <li>Your accommodation has been selected as a Top Accommodation</li>
                                            @endif
                                        </ul>
                                        <hr style="margin: 10px;">
                                        <div class="in-line" style="float: right; margin-bottom: 10px;">
                                            <center>
                                                <a style="" class="btn btn-danger btn-lg" href="/extranet/accommodations/delete/{{ $accommodation->id }}" onclick="return confirm('Are you sure you would like to delete this Accommodation. This will also delete the rooms added to this accommodation.This process cannot be reversed.')">Delete</a>
                                                <a style="" class="btn btn-warning btn-lg" href="/extranet/accommodations/edit/{{ $accommodation->id }}">Edit</a>
                                                <a style="" class="btn btn-info btn-lg" href="/extranet/accommodations/rooms/{{ $accommodation->id }}">Rooms</a>
                                                <a style="" class="btn btn-success btn-lg" href="/extranet/accommodations/images/{{ $accommodation->id }}">Images</a>
                                                <a style="" class="btn btn-primary btn-lg" href="/extranet/accommodations/preview/{{ $accommodation->id }}">Preview</a>
                                            </center>
                                        </div>
                                    </div>
                                    <!--end info-->
                                </div>
                                <!--end description-->
                            </div>
                        @endforeach    
                    @else
                        <p>No accommodations has been added to your account</p>
                    @endif
                    
                </div>
                <!--end my-items-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->    
@endsection

@section('js')
<script src="//unpkg.com/sweetalert2@7.3.1/dist/sweetalert2.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<script>
    var deleter = {

        linkSelector          : "a[data-delete]",
        modalTitle            : "Are you sure?",
        modalMessage          : "You will not be able to recover this entry?",
        modalConfirmButtonText: "Yes, delete it!",
        laravelToken          : null,
        url                   : "/",

        init: function() {
            $(this.linkSelector).on('click', {self:this}, this.handleClick);
        },

        handleClick: function(event) {
            event.preventDefault();
            
            var self = event.data.self;
            var link = $(this);

            self.modalTitle             = link.data('title') || self.modalTitle;
            self.modalMessage           = link.data('message') || self.modalMessage;
            self.modalConfirmButtonText = link.data('button-text') || self.modalConfirmButtonText;
            self.url                    = link.attr('href');
            self.laravelToken           = $("meta[name=token]").attr('content');

            self.confirmDelete();
        },

        confirmDelete: function() {
            swal({
                    title             : this.modalTitle,
                    text              : this.modalMessage,
                    type              : "warning",
                    showCancelButton  : true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText : this.modalConfirmButtonText,
                    closeOnConfirm    : true
                },
                function() {
                    console.log("message");
                    this.makeDeleteRequest()
                }.bind(this)
            );
        },

        makeDeleteRequest: function() {
            var form =
                $('<form>', {
                    'method': 'POST',
                    'action': this.url
                });

            var token =
                $('<input>', {
                    'type': 'hidden',
                    'name': '_token',
                    'value': this.laravelToken
                });

            var hiddenInput =
                $('<input>', {
                    'name': '_method',
                    'type': 'hidden',
                    'value': 'DELETE'
                });

            return form.append(token, hiddenInput).appendTo('body').submit();
        }
    };
    deleter.init();
</script>

@endsection