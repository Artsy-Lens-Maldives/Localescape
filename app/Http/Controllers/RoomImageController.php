<?php

namespace App\Http\Controllers;

use App\Accomodations;
use App\accommo_photo;
use App\accommo_room;
use App\Room_Image;
use Illuminate\Http\Request;

class RoomImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, $room_id, Request $request)
    {
        $accommodation = Accomodations::find($id);
        $room = accommo_room::find($room_id);

        $i = 0;
        foreach ($request->image as $photo) {
            $i++;
            $m = ($i == '1') ? '1' : '0';

            $file_name = $room->room_type.'-'.time().'-'.$photo->getClientOriginalName();
            $location = $accommodation->type.'/'.$accommodation->slug.'/rooms'.'/'.$room->room_type;

            $url_original = Upload::upload_original($photo, $file_name, $location);
            $url_thumbnail = Upload::upload_thumbnail($photo, $file_name, $location);

            Room_Image::create([
                'accommo_id' => $id,
                'room_id' => $room_id,
                'main' => $m,
                'photo_url' => $url_original,
                'thumbnail' => $url_thumbnail,
            ]);
        }
        return redirect()->back()->with('alert-success', 'Successfully added new image(s) to the room');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room_Image  $room_Image
     * @return \Illuminate\Http\Response
     */
    public function show(Room_Image $room_Image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room_Image  $room_Image
     * @return \Illuminate\Http\Response
     */
    public function edit(Room_Image $room_Image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room_Image  $room_Image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room_Image $room_Image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room_Image  $room_Image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room_Image $room_Image)
    {
        //
    }
}
