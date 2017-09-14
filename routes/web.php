<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/all', 'AccomodationsController@index');

/*
|--------------------------------------------------------------------------
| Test Routes (Delete Later)
|--------------------------------------------------------------------------
*/

Route::get('/hotels', function () {
    $type = "Hotels";
    return view('accommodations.all', compact('type'));
});

Route::get('/resorts', function () {
    $type = "Resorts";
    return view('accommodations.all', compact('type'));
});

Route::get('/guest-house', function () {
    $type = "Guest House";
    return view('accommodations.all', compact('type'));
});

Route::get('/hotels/detail', function () {
    $type = "Hotels";
    return view('accommodations.detail', compact('type'));
});

Route::get('/resorts/detail', function () {
    $type = "Resorts";
    return view('accommodations.detail', compact('type'));
});

Route::get('/guest-house/detail', function () {
    $type = "Guest House";
    return view('accommodations.detail', compact('type'));
});

Route::get('/tours', function () {
    $type = "Tours";
    return view('tours.all', compact('type'));
});

Route::get('/photo-package', function () {
    $type = "Photo Package";
    return view('tours.all', compact('type'));
});

Route::get('/diving-package', function () {
    $type = "Diving Package";
    return view('tours.all', compact('type'));
});

Route::get('/blog', function () {
    return view('blog.all');
});

Route::get('/blog-detail', function () {
    return view('blog.detail');
});

Route::get('/about-us', function () {
    return view('about.about-us');
});

Route::get('/contact-us', function () {
    return view('about.contact-us');
});

Route::get('/become-an-affiliate', function () {
    return view('about.become-an-affiliate');
});

Route::get('/terms-and-conditions', function () {
    return view('about.terms-and-conditions');
});

Route::prefix('extranet')->group(function () {
    Route::get('/', function () {
        return view('extranet.home');
    });

    Route::get('/home', function () {
        return view('extranet.home');
    });

    Route::get('/profile', function () {
        return view('extranet.profile');
    });
    
    Route::prefix('accommodations')->group(function () {
        Route::get('/', function () {
            return view('extranet.accommodations.all');
        });

        Route::get('/add', function () {
            return view('extranet.accommodations.submit');
        });

        Route::get('/edit', function () {
            return view('extranet.accommodations.edit');
        }); 
        
        Route::get('/bookings', function () {
            return view('extranet.accommodations.bookings');
        }); 

        Route::get('/reviews', function () {
            return view('extranet.accommodations.reviews');
        }); 
    });

});