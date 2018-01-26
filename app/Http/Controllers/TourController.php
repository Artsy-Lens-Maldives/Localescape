<?php

namespace App\Http\Controllers;

use App\tour;
use App\Tours_photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mohamedathik\PhotoUpload\Upload;
use App\Helpers\Helper;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = \App\tour::all();
        return view('tours.view', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tours.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tour = tour::create(Input::except('_token', 'image'));

        $i = 0;
        foreach ($request->image as $photo) {
            $i++;
            $m = ($i == '1') ? '1' : '0';
            //File names and location
            $file_name = $tour->slug.'-'.time().'-'.$photo->getClientOriginalName();
            $location = 'tour/'.$tour->slug;
            
            $url_original = Upload::upload_original($photo, $file_name, $location);
            $url_thumbnail = Upload::upload_thumbnail($photo, $file_name, $location);
            
            Tours_photo::create([
                'tour_id' => $tour->id,
                'main' => $m,
                'photo_url' => $url_original,
                'thumbnail' => $url_thumbnail,
            ]);
        }

        return redirect('admin/tours')->with('alert-success', 'Successfully added new Tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $tour = tour::where('slug', $slug)->first();
        return view('tours.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update($slug, Request $request)
    {
        $tour = tour::where('slug', $slug)->first();
        $tour->name = $request->name;
        $tour->price = $request->price;
        $tour->description = $request->description;
        $tour->itenarary = $request->itenarary;
        $tour->save();
        return redirect('admin/tours')->with('alert-success', 'Successfully edited the tour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $tour = tour::where('slug', $slug)->first();
        $tour->delete();
        return redirect('admin/tours')->with('alert-success', 'Successfully deleted the tour');
    }
}
