<?php

namespace App\Http\Controllers;

use App\Tours_photo;
use App\tour;
use Illuminate\Http\Request;
use Mohamedathik\PhotoUpload\Upload;

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
    public function store($slug, Request $request)
    {
        $tour = tour::where('slug', $slug)->first();

        foreach ($request->image as $photo) {
            //File names and location
            $file_name = $tour->slug.'-'.time().'-'.$photo->getClientOriginalName();
            $location = 'tour/'.$tour->slug;
            
            $url_original = Upload::upload_original($photo, $file_name, $location);
            $url_thumbnail = Upload::upload_thumbnail($photo, $file_name, $location);
            
            Tours_photo::create([
                'tour_id' => $tour->id,
                'main' => '0',
                'photo_url' => $url_original,
                'thumbnail' => $url_thumbnail,
            ]);
        }

        return redirect()->back()->with('alert-success', 'Successfully added new image(s) to the tour');
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
    public function destroy($slug, Tours_photo $tours_photo)
    {
        $original = Upload::delete_image($tours_photo->photo_url);
        $thumbnail = Upload::delete_image($tours_photo->thumbnail);
        $tours_photo->delete();

        return redirect()->back()->with('alert-success', 'Successfully deleted the tour photo');
    }
}
