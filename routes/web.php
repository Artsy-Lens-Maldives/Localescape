<?php

use App\Accomodations;
use App\accommo_photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Filesystem;
use Carbon\Carbon;
// use Alert;

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
    $top_picks = \App\Accomodations::where('top_acco', '1')->get();
    $recent_acco = \App\Accomodations::where('active', '1')->orderBy('created_at', 'desc')->take(8)->get();
    $blogs = \App\blog::orderBy('created_at', 'desc')->get();
    return view('main', compact('top_picks', 'recent_acco', 'blogs'));
});

//Test Routes (start)
//Route::get('/all', 'Api/ApiAccomodationsController@index');
Route::get('/api/accommodations', 'TestRoutesController@ApiAccommodationNameList');
Route::get('/{type}/{slug}/photo/{filename}/thumb', 'TestRoutesController@ImageFromStorageWithResize');
Route::get('/{type}/{slug}/photo/{filename}', 'TestRoutesController@ImageFromStorage');
Route::get('/photo/create', 'PhotopanelController@create');
Route::post('/photo/create/package', 'PhotopanelController@store');
Route::get('/imagetest', 'TestRoutesController@ImageTest');
Route::get('/dontdumpthis', 'TestRoutesController@FacilitiesDump');
Route::get('/newExtranet/login', function () {
    return view('extranet.auth.newLogin');
});
//Test Routes (end)

//Gallery (start)
Route::get('/gallery', 'GalleryController@index');
//Gallery (end)

// Accommodation Routes (start)
Route::get('accommodation/{type}', 'AccomodationsController@listing');
Route::get('accommodation/{type}/{slug}', 'AccomodationsController@detail');
// Accommodation Routes (end)

//Tour, Diving and Photo Package (start)
Route::get('/tours', function() {
    $type = 'Tours';
    $tours = \App\tour::all();
    return view('tours.all', compact('type', 'tours'));
});
Route::get('/tour/{slug}', function ($slug) {
    $tour = \App\tour::where('slug', $slug)->first();
    return view('tours.detail', compact('tour'));
});
Route::get('/diving-package', function() {
    $type = 'Diving Pacakages';
    $dives = \App\dive::all();
    return view('dive.all', compact('type', 'dives'));
});
Route::get('/photo-package', function() {
    $type = 'Photo Pacakages';
    $photos = \App\photopanel::all();
    return view('photo.all', compact('type', 'photos'));
});
//Tour, Diving and Photo Package (end)

//Blog (start)
Route::get('/blog', function () {
    $blogs = \App\blog::all();
    return view('blog.all', compact('blogs'));
});
Route::get('/blog/{slug}', function ($slug) {
    $blog = \App\blog::where('slug', $slug)->first();
    return view('blog.detail', compact('blog'));
});
//Blog (end)

//Auth Routes (start)
Auth::routes();

Route::group(['prefix' => 'extranet'], function () {
    Route::get('/login', 'ExtranetAuth\LoginController@showLoginForm');
    Route::post('/login', 'ExtranetAuth\LoginController@login');
    Route::post('/logout', 'ExtranetAuth\LoginController@logout');

    Route::get('/register', 'ExtranetAuth\RegisterController@showRegistrationForm');
    Route::post('/register', 'ExtranetAuth\RegisterController@register');

    Route::post('/password/email', 'ExtranetAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'ExtranetAuth\ResetPasswordController@reset');
    Route::get('/password/reset', 'ExtranetAuth\ForgotPasswordController@showLinkRequestForm');
    Route::get('/password/reset/{token}', 'ExtranetAuth\ResetPasswordController@showResetForm');
});
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::get('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
Route::group(['prefix' => 'divepackage'], function () {
    Route::get('/login', 'DivepackageAuth\LoginController@showLoginForm');
    Route::post('/login', 'DivepackageAuth\LoginController@login');
    Route::post('/logout', 'DivepackageAuth\LoginController@logout');

    Route::get('/register', 'DivepackageAuth\RegisterController@showRegistrationForm');
    Route::post('/register', 'DivepackageAuth\RegisterController@register');

    Route::post('/password/email', 'DivepackageAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'DivepackageAuth\ResetPasswordController@reset');
    Route::get('/password/reset', 'DivepackageAuth\ForgotPasswordController@showLinkRequestForm');
    Route::get('/password/reset/{token}', 'DivepackageAuth\ResetPasswordController@showResetForm');
});
Route::group(['prefix' => 'photopackage'], function () {
    Route::get('/login', 'PhotopackageAuth\LoginController@showLoginForm');
    Route::post('/login', 'PhotopackageAuth\LoginController@login');
    Route::post('/logout', 'PhotopackageAuth\LoginController@logout');

    Route::get('/register', 'PhotopackageAuth\RegisterController@showRegistrationForm');
    Route::post('/register', 'PhotopackageAuth\RegisterController@register');

    Route::post('/password/email', 'PhotopackageAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'PhotopackageAuth\ResetPasswordController@reset');
    Route::get('/password/reset', 'PhotopackageAuth\ForgotPasswordController@showLinkRequestForm');
    Route::get('/password/reset/{token}', 'PhotopackageAuth\ResetPasswordController@showResetForm');
});
//Auth Routes (end)

//Bookings and Inquiry (start)
Route::get('/booking', 'BookingController@create')->middleware('auth');
Route::post('/booking', 'BookingController@store')->middleware('auth');
Route::get('/inquiry', 'InqueryController@create')->middleware('auth');
Route::post('/inquiry', 'InqueryController@store')->middleware('auth');
//Bookings and Inquiry (end)

//Mail Test URLS
Route::group(['prefix' => 'mailTest'], function () {
    // Sign Up
    Route::get('/customer/sign-up', function () {
        $user = App\User::find(1);
        return new App\Mail\SignUpCustomer($user);
    });
    Route::get('/extranet/sign-up', function () {
        $user = App\Extranet::find(1); 
        return new App\Mail\SignUpExtranet($user);
    });
    
    // Booking
    Route::get('/extranet/booking', function () {
        $user = App\Extranet::find(1);
        $booking = \App\booking::find(1);
        return new App\Mail\BookingExtranet($booking);
    });
    Route::get('/customer/booking', function () {
        $user = App\Extranet::find(1);
        $booking = \App\booking::find(1);
        return new App\Mail\BookingCustomer($booking);
    });

    // Confimed
    Route::get('/extranet/booking/confirmed', function () {
        $user = App\Extranet::find(1);
        $booking = \App\booking::find(1);
        return new App\Mail\BookingExtranet($booking);
    });
    Route::get('/customer/booking/confirmed', function () {
        $user = App\Extranet::find(1);
        $booking = \App\booking::find(1);
        return new App\Mail\BookingCustomer($booking);
    });

    Route::get('/extranet/booking/cancel-request', function () {
        $user = App\Extranet::find(1);
        $booking = \App\booking::find(1);
        return new App\Mail\BookingExtranet($booking);
    });
    Route::get('/customer/booking/cancel-request', function () {
        $user = App\Extranet::find(1);
        $booking = \App\booking::find(1);
        return new App\Mail\BookingCustomer($booking);
    });

    Route::get('/extranet/booking/cancel-request', function () {
        $user = App\Extranet::find(1);
        $booking = \App\booking::find(1);
        return new App\Mail\BookingExtranet($booking);
    });
    Route::get('/customer/booking/cancel-request', function () {
        $user = App\Extranet::find(1);
        $booking = \App\booking::find(1);
        return new App\Mail\BookingCustomer($booking);
    });
});

Route::get('/newLogin', function () {
    return view('newlogin');
});


//Search
Route::group(['prefix' => 'search'], function () {
    Route::get('/', function (Request $request) {
        $q = $request->q;
        $accommodations = \App\Accomodations::search($q)->where('active', '1')->paginate(15);
        return view('search.index', compact('accommodations'));
        // return $accommodations;
    });
});

Route::get('/about-us', function () {
    $about = \App\AboutUs::find(1);
    return view('about.about-us', compact('about'));
});

Route::get('/contact-us', function () {
    return view('about.contact-us');
});

// Subsribe
Route::group(['prefix' => 'subscribe'], function () {
    
});

Route::post('/subscribe/post', function (Request $request) {
    $subscribe = \App\Subscriber::create(Input::except('_token'));
    Alert::success('Subscribed successfully');
    return redirect()->back();
});

// Customer Panel
Route::group(['prefix' => 'home'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    
    Route::get('/bookings', 'HomeController@bookings');
    Route::get('/bookings/cancel/{id}', 'BookingController@cancellation_request');

    Route::get('/inquiries', 'HomeController@inquiry');
    Route::get('/inquiries/{id}', 'HomeController@inquiryView');
    
    Route::get('/settings','HomeController@settings');
    Route::post('/settings/profile','HomeController@profile');
    Route::get('/settings/change-password','HomeController@changePass');
    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
});