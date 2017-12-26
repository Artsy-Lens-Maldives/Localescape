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
                    <h1><a href="#">Add New Room</a></h1>
                </div>
                <form class="form-horizontal" action="{{ url()->current() }}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="accommo_id" value="{{ $id }}">
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="room_type">Room Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="room_type" placeholder="Room Type" name="room_type">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="short_description">Short Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="short_description" placeholder="Short Description" name="short_description">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="description">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="description" placeholder="Description" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="no_adult">Number of Adults</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_adult" placeholder="Number of Adults" name="no_adult">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="price_adult">Price per Adult</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price_adult" placeholder="Price per Adult" name="price_adult">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="no_children">Number of Children</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_children" placeholder="Number of Children" name="no_children">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="price_child">Price per child</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price_child" placeholder="Price per child" name="price_child">
                        </div>
                    </div>
                    
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <a href="{{ url('extranet/accommodations') }}" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </form>
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->    
@endsection