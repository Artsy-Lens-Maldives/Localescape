<?php

namespace App\Http\Controllers;

use App\Blog_photo;
use Illuminate\Http\Request;

class BlogPhotoController extends Controller
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
    public function create(blog $blog)
    {
        //Delete Photos
        $photos = $blog->photos;
        if(!$photos->isEmpty()){
            foreach ($photos as $photo) {
                $original = Helper::delete_image_s3($photo->photo_url);
                $thumbnail = Helper::delete_image_s3($photo->thumbnail);
                $photo->delete();
            }
        }

        //File name and location
        $photo = $request->image;
        $file_name = $blog->slug.'-'.time().'-'.$photo->getClientOriginalName();
        $location = 'blog/'.$blog->slug;
        
        $url_original = Upload::upload_original($photo, $file_name, $location);
        $url_thumbnail = Upload::upload_thumbnail($photo, $file_name, $location);

        Blog_photo::create([
            'blog_id' => $blog->id,
            'main' => '1',
            'photo_url' => $url_original,
            'thumbnail' => $url_thumbnail,
        ]);

        return redirect('admin/blog')->with('alert-success', 'Successfully added blog photo');
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
     * @param  \App\Blog_photo  $blog_photo
     * @return \Illuminate\Http\Response
     */
    public function show(Blog_photo $blog_photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog_photo  $blog_photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog_photo $blog_photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog_photo  $blog_photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog_photo $blog_photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog_photo  $blog_photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog_photo $blog_photo)
    {
        //
    }
}
