<?php

namespace App\Http\Controllers;

use App\tour;
use App\Tours_photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class TourController extends Controller
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

        foreach ($request->image as $photo) {
            //File names and location
            $fileName = $tour->slug.'-'.time().'-'.$photo->getClientOriginalName();
            $location_o = 'tour/'.$tour->slug.'/original'.'/'.$fileName;
            $location_t = 'tour/'.$tour->slug.'/thumbnail'.'/'.$fileName;
            
            $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));

            //Original Image
            $original = Image::make($photo->getRealPath())->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $s3->put($location_o, $original->stream()->__toString(), 'public');
            //Thumbnail image
            $thumbnail = Image::make($photo->getRealPath())->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $s3->put($location_t, $thumbnail->stream()->__toString(), 'public');

            Tours_photo::create([
                'tour_id' => $tour->id,
                'main' => '1',
                'photo_url' => $location_o,
                'thumbnail' => $location_t,
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
        $tour = \App\tour::where('slug', $slug)->first();
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
        $tour = \App\tour::where('slug', $slug)->first();
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
        $tour = \App\tour::where('slug', $slug)->first();
        $tour->delete();
        return redirect('admin/tours')->with('alert-success', 'Successfully deleted the tour');
    }
}
