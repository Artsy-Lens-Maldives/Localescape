<?php

namespace App\Http\Controllers;

use App\blog;
use App\Blog_photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use App\Helpers\Helper;
use Mohamedathik\PhotoUpload\Upload;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = \App\blog::all();
        return view('blog.view', compact('blogs'));
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

        return redirect('admin/blog')->with('alert-success', 'Successfully added new blog post');
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
        return view('blog.edit', compact('blog'));
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
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->save();
        return redirect('admin/blog')->with('alert-success', 'Successfully edited the blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
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

        $blog->delete();
        return redirect('admin/blog')->with('alert-success', 'Successfully deleted the blog post');
    }
}
