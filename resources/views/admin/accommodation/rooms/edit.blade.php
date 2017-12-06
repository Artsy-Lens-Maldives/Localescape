@extends('layouts.admin')

@section('title')
    <span>Add New Room</span>
@endsection

@section('content') 
    
    <div class="container">
        <form class="form-horizontal" action="{{ url()->current() }}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="accommo_id" value="{{ $accommodation->id }}">
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="room_type">Room Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="room_type" placeholder="Room Type" name="room_type" value="{{ $room->room_type }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="short_description">Short Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="short_description" placeholder="Short Description" name="short_description" value="{{ $room->short_description }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="description">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="description" placeholder="Description" name="description">{{ $room->description }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="no_adult">Number of Adults</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_adult" placeholder="Number of Adults" name="no_adult" value="{{ $room->no_adult }}">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="price_adult">Price per Adult</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="price_adult" placeholder="Price per Adult" name="price_adult" value="{{ $room->price_adult }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="no_children">Number of Children</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_children" placeholder="Number of Children" name="no_children" value="{{ $room->no_children }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="price_child">Price per child</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="price_child" placeholder="Price per child" name="price_child" value="{{ $room->price_child }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="price_child">Images</label>
                <div class="col-sm-10">
                    <p class="form-control">To edit Images goto the images section in accommodation saving the changes</p>
                </div>
            </div>
            
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="{{ url('admin/accommodations') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('js')
    
   

@endsection