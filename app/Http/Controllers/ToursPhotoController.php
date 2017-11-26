<?php

namespace App\Http\Controllers;

use App\Tours_photo;
use App\tour;
use Illuminate\Http\Request;

class ToursPhotoController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tours_photo  $tours_photo
     * @return \Illuminate\Http\Response
     */
    public function show(Tours_photo $tours_photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tours_photo  $tours_photo
     * @return \Illuminate\Http\Response
     */
    public function main($slug, Tours_photo $tours_photo)
    {
        $tour = tour::where('slug', $slug)->first();
        $old_photos = Tours_photo::where('tour_id', $tour->id)->get();
        foreach ($old_photos as $old_photo) {
            $old_photo->main = '0';
            $old_photo->save();
        }
        $tours_photo->main = '1';
        $tours_photo->save();

        
        return redirect()->back()->withInput();
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tours_photo  $tours_photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tours_photo $tours_photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tours_photo  $tours_photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tours_photo $tours_photo)
    {
        //
    }
}
