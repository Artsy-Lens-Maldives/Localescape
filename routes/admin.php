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