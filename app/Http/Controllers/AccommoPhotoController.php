<?php

namespace App\Http\Controllers;

use App\Accomodations;
use App\accommo_photo;
use Illuminate\Http\Request;

class AccommoPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $acco = \App\Accomodations::find($id);
        return view('extranet.accommodations.photo', compact('acco'));
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
    public function store($id, Request $request)
    {
        $accommodations = Accomodations::find($id);

        foreach ($request->image as $photo) {            
            $fileName = $accommodations->slug . '-' . time() . '-' . $photo->getClientOriginalName();
            $location = 'public/' . $accommodations->slug . '/images'; 
            $file = $photo->storeAs($location, $fileName);
            accommo_photo::create([
                'accommo_id' => $accommodations->id,
                'main' => '0',
                'photo_url' => '/'. $accommodations->type . '/' . $accommodations->slug . '/' . 'photo/' . $fileName
            ]);
        }
        return redirect()->back()->with('alert-success', 'Successfully added new image(s)');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accommo_photo  $accommo_photo
     * @return \Illuminate\Http\Response
     */
    public function show(accommo_photo $accommo_photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accommo_photo  $accommo_photo
     * @return \Illuminate\Http\Response
     */
    public function edit(accommo_photo $accommo_photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accommo_photo  $accommo_photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accommo_photo $accommo_photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accommo_photo  $accommo_photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id ,accommo_photo $accommo_photo)
    {
        $accommo_photo->delete();
        return redirect()->back()->with('alert-success', 'Successfully deleted the image');
    }

    public function main($id, accommo_photo $accommo_photo)
    {
        $old_photos = accommo_photo::where('accommo_id', $id)->get();
        foreach ($old_photos as $old_photo) {
            $old_photo->main = '0';
            $old_photo->save();
        }
        $accommo_photo->main = '1';
        $accommo_photo->save();
        return redirect()->back();
    }
}
