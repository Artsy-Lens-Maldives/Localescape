<?php

use App\Accomodations;
use App\accommo_photo;
use App\facilities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Auth;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    // dd($users);

    return view('admin.home');
})->name('home');

Route::get('/', function () {
    return redirect('admin/home');
    
});

Route::group(['prefix' => 'accommodations'], function () {
    Route::group(['prefix' => 'rooms'], function () {
        Route::get('/', function () {
            return view('admin.accommodation.rooms.all');
        });    
    });
    Route::get('/', function () {
        $accommodations = Accomodations::all();
        return view('admin.accommodation.all', compact('accommodations'));
    });
    Route::get('/create', function () {
        $accommodations = Accomodations::all();
        $facilities = \App\facilities::all();
        return view('admin.accommodation.create', compact('accommodations', 'facilities'));
    });
    Route::post('/create', function () {
        $accommodations = Accomodations::create(Input::except('_token', 'image', 'facilities'));
        return 'done';
    });
    Route::get('/edit/{id}', function ($id) {
        $acco = Accomodations::find($id);
        $facilities = facilities::all();
        return view('admin.accommodation.edit', compact('acco', 'facilities'));
    });
    Route::get('/images/{id}', function ($id) {
        $acco = Accomodations::find($id);
        return view('admin.accommodation.photo', compact('acco'));
    });
    Route::get('/approve/{id}', function ($id) {
        $acco = Accomodations::find($id);
        return view('admin.accommodation.approve', compact('acco'));
    });
    Route::post('/approve/{id}', function ($id, Request $request) {
        $acco = Accomodations::find($id);
        if ($request->active == '1') {
            $acco->active = $request->active;
            $acco->status = $request->status;
            $acco->save();
        } else {
            $acco->active = '0';
            $acco->status = $request->status;
            $acco->save();
        }    
        return redirect('admin/accommodations');
        
    });
});

Route::group(['prefix' => 'user'], function () {
    //Admin Routes
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            $users = \App\Admin::all();
            return view('admin.user.admin.all', compact('users'));
        });
    });

    //Extranet
    Route::group(['prefix' => 'extranet'], function () {
        Route::get('/', function () {
            $users = \App\Extranet::all();
            return view('admin.user.extranet.all', compact('users'));
        });
    });
    
    //Customer Routes
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', function () {
            $users = \App\User::all();
            return view('admin.user.customers.all', compact('users'));
        });
    });
    
    //Dive Users
    Route::group(['prefix' => 'dive'], function () {
        Route::get('/', function () {
            $users = \App\User::all();
            return view('admin.user.dive.all', compact('users'));
        });
    });

    //Photo Users
    Route::group(['prefix' => 'photo'], function () {
        Route::get('/', function () {
            $users = \App\User::all();
            return view('admin.user.photo.all', compact('users'));
        });
    });
});

Route::group(['prefix' => 'tours'], function () {
    Route::get('/', function () {
        $tours = \App\tour::all();
        return view('tours.view', compact('tours'));
    });
    Route::get('/add', 'TourController@create');
    Route::post('/add', 'TourController@store');
    Route::get('/delete/{slug}', 'TourController@destroy');
    
    Route::group(['prefix' => 'edit'], function () {
        Route::get('/{slug}', 'TourController@edit');
        Route::post('/{slug}', 'TourController@update');
        
        Route::get('/{slug}/{tours_photo}/main', 'ToursPhotoController@main');
        Route::get('/{slug}/{tours_photo}/delete', 'ToursPhotoController@destroy');
    });


});

Route::get('/testone', function () {
    $type = env('UPLOAD_TYPE', 'public');
    return $type;

});

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', function () {
        $blogs = \App\blog::all();
        return view('blog.view', compact('blogs'));
    });
    Route::get('/create', function () {
        return view('blog.create');
    }); 
    Route::post('/create', 'BlogController@store');

    Route::get('/delete/{id}', function ($id) {
        $blog = \App\blog::find($id);
        $blog->delete();
        return redirect('admin/blog')->with('alert-success', 'Successfully deleted the blog post');
    });
    
    Route::get('/edit/{id}', function ($id) {
        $blog = \App\blog::find($id);
        return view('blog.edit', compact('blog'));
    });
    Route::post('/edit/{id}', function ($id, Request $request) {
        $blog = \App\blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->save();
        return redirect('admin/blog')->with('alert-success', 'Successfully edited the blog');
    });
});

Route::group(['prefix' => 'bookings'], function () {
    Route::group(['prefix' => 'accommodations'], function () {
        Route::get('/', function () {
            $bookings = \App\booking::all();
            return view('bookings.view', compact('bookings'));
        }); 
    });
    Route::group(['prefix' => 'tours'], function () {
        Route::get('/', function () {
            $bookings = \App\booking::all();
            return view('bookings.view', compact('bookings'));
        }); 
    });
});

Route::group(['prefix' => 'inquiries'], function () {
    Route::get('/', function () {
        $inquiries = \App\inquery::all();
        return view('inquery.view', compact('inquiries'));
    }); 
});

Route::group(['prefix' => 'gallery'], function () {
    Route::get('/', function () {
        $gallery_images = \App\Gallery::all();        
        return view('gallery.create', compact('gallery_images'));
    });
    Route::post('/post', function (Request $request) {                
        foreach ($request->image as $photo) {
            //File names and location
            $fileName = 'gallery' . '-' . time() . '-' . $photo->getClientOriginalName();
            $location_o = 'gallery'.'/original'.'/'.$fileName;
            $location_t = 'gallery'.'/thumbnail'.'/'.$fileName;
            
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

            \App\Gallery::create([
                'photo_url' => $location_o,
                'thumbnail' => $location_t,
            ]);
        }
        return redirect()->back()->with('alert-success', 'Successfully added new image(s)');
    }); 
    Route::get('/{id}/delete', function ($id) {
        $photo = \App\Gallery::find($id);
        if ($photo !== null) {
            $photo->delete();
            return redirect()->back()->with('alert-success', 'Successfully deleted the image');
        } else {
            return redirect('admin/gallery')->with('alert-danger', 'Image not found');
        }
        
    });
});

Route::group(['prefix' => 'facilities'], function () {
    Route::get('/', function () {
        $facilities = \App\facilities::all();
        return view('facilities.index', compact('facilities'));
    });
    Route::get('/add', function () {
        return view('facilities.create');
    });
    Route::post('/add', function () {
        $facility = \App\facilities::create(Input::except('_token'));
        return redirect('admin/facilities')->with('alert-success', 'Successfully added new facility');
    });
    Route::get('/edit/{id}', function ($id) {
        $facility = \App\facilities::find($id);
        return view('facilities.edit', compact('facility'));
    });
    Route::post('/edit/{id}', function ($id, Request $request) {
        $facility = \App\facilities::find($id);
        $facility->name = $request->name;
        $facility->fa_icon = $request->fa_icon;
        $facility->save();
        return redirect('admin/facilities')->with('alert-success', 'Successfully edited the facility');
    });
    Route::get('/delete/{id}', function ($id) {
        $facility = \App\facilities::find($id);
        $facility->delete();
        return redirect()->back()->with('alert-success', 'Successfully deleted the facility');
    });
});
