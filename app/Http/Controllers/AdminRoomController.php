<?php

namespace App\Http\Controllers;

use App\Accomodations;
use App\accommo_room;
use App\Room_Image;
use Illuminate\Support\Facades\Input;
use Mohamedathik\PhotoUpload\Upload;

class AdminRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $accommodation = Accomodations::find($id);
        return view('admin.accommodation.rooms.all', compact('accommodation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $accommodation = Accomodations::find($id);
        return view('admin.accommodation.rooms.create', compact('accommodation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rooms = \App\accommo_room::create(Input::except('_token'));
        $url = 'admin/accommodations/rooms/' . $id ; 
        return redirect($url)->with('alert-success', 'Successfully added new room');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $room_id)
    {
        $accommodation = Accomodations::find($id);
        $room = accommo_room::find($room_id);
        return view('admin.accommodation.rooms.edit', compact('accommodation', 'room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, $room_id, Request $request)
    {
        $room = accommo_room::find($room_id);
        $room->room_type = $request->room_type;
        $room->short_description = $request->short_description;
        $room->description = $request->description;
        $room->no_adult = $request->no_adult;
        $room->price_adult = $request->price_adult;
        $room->no_children = $request->no_children;
        $room->price_child = $request->price_child;
        $room->save();

        $url = 'admin/accommodations/rooms/' . $id ; 
        return redirect($url)->with('alert-success', 'Successfully edited the room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $room_id)
    {
        $acco = Accomodations::find($id);
        $room = accommo_room::find($room_id);

        //Delete Room Photos
        $room_photos = $room->photos;
        if(!$room_photos->isEmpty()){
            foreach ($room_photos as $room_photo) {
                $r_original = Helper::delete_image_s3($room_photo->photo_url);
                $r_thumbnail = Helper::delete_image_s3($room_photo->thumbnail);
            }
        }

        $room->delete();
        return redirect()->back()->with('alert-success', 'Successfully deleted the room');
    }
}
