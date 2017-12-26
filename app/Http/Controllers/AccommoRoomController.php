<?php

namespace App\Http\Controllers;

use App\Accomodations;
use App\accommo_room;
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
            if ($i == '1'){
                $m = '1';
            } else {
                $m = '0';
            }
            //File names and location
            $fileName = $room->room_type.'-'.time().'-'.$photo->getClientOriginalName();
            $location_o = $accommodations->type.'/'.$accommodations->slug.'/rooms'.'/'.$room->room_type.'/original'.'/'.$fileName;
            $location_t = $accommodations->type.'/'.$accommodations->slug.'/rooms'.'/'.$room->room_type.'/thumbnail'.'/'.$fileName;
            
            $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));

            //Original Image
            $original = Image::make($photo)->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $s3->put($location_o, $original->stream()->__toString(), 'public');
            //Thumbnail image
            $thumbnail = Image::make($photo)->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $s3->put($location_t, $thumbnail->stream()->__toString(), 'public');

            \App\Room_Image::create([
                'accommo_id' => $id,
                'room_id' => $id,
                'main' => $m,
                'photo_url' => $location_o,
                'thumbnail' => $location_t,
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
        $acco = Accomodations::find($accommo_room->accommo_id);
        if($acco->user_id == Auth::guard('extranet')->user()->id){
            $accommo_room->delete();
            return redirect()->back()->with('alert-success', 'Successfully deleted the room');
        } else {
            return redirect('extranet/accommodations');
        } 
    }
}
