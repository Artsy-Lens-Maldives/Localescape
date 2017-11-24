<?php

namespace App\Http\Controllers;

use App\blog;
use App\Blog_photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class BlogController extends Controller
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
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = blog::create(Input::except('_token', 'image'));
        
        $photo = $request->image;

        //File names and location
        $fileName = $blog->slug.'-'.time().'-'.$photo->getClientOriginalName();
        $location_o = 'blog/'.$blog->slug.'/original'.'/'.$fileName;
        $location_t = 'blog/'.$blog->slug.'/thumbnail'.'/'.$fileName;
        
        $s3 = \Storage::disk('s3');

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

        Blog_photo::create([
            'blog_id' => $blog->id,
            'main' => '1',
            'photo_url' => $location_o,
            'thumbnail' => $location_t,
        ]);

        return redirect()->back()->with('alert-success', 'Successfully added new blog post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
    }
}
