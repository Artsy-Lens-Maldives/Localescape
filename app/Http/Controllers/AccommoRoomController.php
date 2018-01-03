<?php

namespace App\Http\Controllers;

use App\Accomodations;
use App\accommo_room;
use App\Room_Image;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class AccommoRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $acco = Accomodations::find($id);
        if($acco->user_id == Auth::guard('extranet')->user()->id){
            $rooms = \App\accommo_room::where('accommo_id', $id)->get();
            return view('extranet.accommodations.rooms.newAll', compact('rooms'));
        } else {
            return redirect('extranet/accommodations');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('extranet.accommodations.rooms.add', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $accommodations = Accomodations::find($id);
        
        $room = \App\accommo_room::create(Input::except('_token', 'image'));
        $url = 'extranet/accommodations/rooms/' . $id ; 

        $i = 0;
        foreach ($request->image as $photo) {
            $i++;
            $m = ($i == '1') ? '1' : '0';
            //File names and location
            $fileName = $room->room_type.'-'.time().'-'.$photo->getClientOriginalName();
            $location = $accommodations->type.'/'.$accommodations->slug.'/rooms'.'/'.$room->room_type;

            $original = Helper::photo_upload_original_s3($photo, $fileName, $location);
            $thumbnail = Helper::photo_upload_thumbnail_s3($photo, $fileName, $location);

            Room_Image::create([
                'accommo_id' => $accommodations->id,
                'room_id' => $room->id,
                'main' => $m,
                'photo_url' => $original,
                'thumbnail' => $thumbnail,
            ]);
        }

        return redirect($url)->with('alert-success', 'Successfully added new room');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accommo_room  $accommo_room
     * @return \Illuminate\Http\Response
     */
    public function show(accommo_room $accommo_room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accommo_room  $accommo_room
     * @return \Illuminate\Http\Response
     */
    public function edit(accommo_room $accommo_room)
    {
        $acco = Accomodations::find($accommo_room->accommo_id);
        if($acco->user_id == Auth::guard('extranet')->user()->id){
            return view('extranet.accommodations.rooms.edit', compact('accommo_room'));
        } else {
            return redirect('extranet/accommodations');
        }    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accommo_room  $accommo_room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accommo_room $accommo_room)
    {
        $accommo_room->room_type = $request->room_type;
        $accommo_room->description = $request->description;
        $accommo_room->no_adult = $request->no_adult;
        $accommo_room->price_adult = $request->price_adult;
        $accommo_room->no_children = $request->no_children;
        $accommo_room->price_child = $request->price_child;
        $accommo_room->save();

        $url = 'extranet/accommodations/rooms/' . $request->accommo_id ; 
        return redirect($url)->with('alert-success', 'Successfully edited room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accommo_room  $accommo_room
     * @return \Illuminate\Http\Response
     */
    public function destroy(accommo_room $accommo_room)
    {
        $room = $accommo_room;
        $acco = Accomodations::find($accommo_room->accommo_id);

        if($acco->user_id == Auth::guard('extranet')->user()->id) {
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
        else {
            return redirect('extranet/accommodations');
        } 
    }
}
