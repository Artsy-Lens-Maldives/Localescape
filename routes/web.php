<?php

use App\Accomodations;
use App\accommo_photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Filesystem;
use Carbon\Carbon;

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
    return view('main', compact('top_picks'));
});

//Test Routes (start)
//Route::get('/all', 'Api/ApiAccomodationsController@index');
Route::get('/all2', function () {
    $flights = App\Accomodations::all();
    return $flights;
});
Route::get('/{type}/{slug}/photo/{filename}/thumb', function ($type, $slug, $filename) {
    $fileloc = 'app/public/' . $slug . '/' . 'images/' . $filename;
    $path = storage_path($fileloc);

    $failed = "It failed";
    
    if (!File::exists($path)) {
      return $failed;
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $img = Image::cache(function($image) use ($file) {
        $image->make($file)->resize(null, 200, function ($constraint) {
            $constraint->aspectRatio();
        });
    }, 100, false);
    
    $response = Response::make($img, 200);
    $response->header("Content-Type", $type);

    return $response;
});
Route::get('/{type}/{slug}/photo/{filename}', function ($type, $slug, $filename) {
    $fileloc = 'app/public/' . $slug . '/' . 'images/' . $filename;
    $path = storage_path($fileloc);

    $failed = "It failed";
    
    if (!File::exists($path)) {
      return $failed;
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
Route::get('/photo/create', 'PhotopanelController@create');
Route::post('/photo/create/package', 'PhotopanelController@store');
Route::get('/imagetest', function(){
    $img = Image::make('https://i.ytimg.com/vi/yaqe1qesQ8c/maxresdefault.jpg')->resize(300, 200);
    return $img->response('jpg');
});
Route::get('/image/{folder}/{type}/{filename}', function ($folder, $type, $filename) {
    $fileloc = 'app/public/'.$folder.'/'.$type.'/'.$filename;
    $path = storage_path($fileloc);

    $failed = "It failed";
    
    if (!File::exists($path)) {
      return $failed;
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    /*$img = Image::cache(function($image) use ($file) {
        $image->make($file)->resize(null, 1080, function ($constraint) {
            $constraint->aspectRatio();
        });
    }, 100, false); */
    
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
Route::get('/dontdumpthis', function () {
    $stuffs = 'Shower, Bathtub, Free toiletries, Toilet, Hairdryer, Bathroom, Satellite channels, Flat-screen TV, TV, Desk, Sofa, Sitting area, Dining area, Room Service, Packed Lunches, Car Rental, Shuttle Service, Tour Desk, Ticket Service, Baggage Storage, Concierge Service, Laundry, Dry Cleaning, Safe, Non-smoking Rooms, Family Rooms, Elevator, Airport Shuttle, 24-Hour Front Desk, Soundproof Rooms, Heating, Iron';
    $array_items = explode(', ', $stuffs);
    foreach ($array_items as $name) {
        $flight = new \App\facilities;
        $flight->name = $name;
        $flight->save();
        echo 'Done';
    }
    echo 'Fully DOne';
});
Route::get('/newExtranet/login', function () {
    return view('extranet.auth.newLogin');
});
//Test Routes (end)

//Gallery (start)
Route::get('/gallery', function () {
    $gallery_images = \App\Gallery::all();
    return view('gallery.index', compact('gallery_images'));
});
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

Route::get('/home', 'HomeController@index')->name('home');
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

    // Route::get('/booking/{acco_id}/{room_id}', 'BookingController@create');
    // Route::post('/booking/{acco_id}/{room_id}', 'BookingController@store');
    // Route::get('/inquery/{acco_id}/{room_id}', 'InqueryController@create');
    // Route::post('/inquery/{acco_id}/{room_id}', 'InqueryController@store');

Route::get('/booking', function (Request $request) {
    $tax = \App\Settings::find('1');
    // Testing Route http://127.0.0.1:8000/booking/?accommodation=1&room=1&check_in=12%2F21%2F2017&check_out=12%2F25%2F2017&adults=2&child=1
    $accommodation = Accomodations::find($request->accommodation);
    $room = \App\accommo_room::find($request->room);
    $check_in = Carbon::parse($request->check_in);
    $check_out = Carbon::parse($request->check_out);
    $adults = $request->adults;
    $child = $request->child;

    $days = $check_out->diffInDays($check_in);
    $tp_adult = $adults * $room->price_adult * $days;
    $tp_child = $child * $room->price_child * $days;
    
    if ($tax->tax == '1') {
        $total = $tp_adult + $tp_child;
        $tax_total = $total + ($total * ($tax->tax_percentage / 100));
    } else {
        $total = $tp_adult + $tp_child;
    }
    
    $room_photo = $room->photos->where('main', 1)->first();

    return view('bookings.newCreate', compact('room', 'check_in', 'check_out','adults' , 'child', 'days', 'tp_adult', 'tp_child', 'total', 'room_photo', 'tax', 'tax_total'));
});

//Bookings and Inquiry (end)

//Mail Test URLS
Route::group(['prefix' => 'mailTest'], function () {
    Route::get('/customer/sign-up', function () {
        $user = App\User::find(1);
        
        return new App\Mail\SignUpCustomer($user);
    });

    Route::get('/extranet/sign-up', function () {
        $user = App\Extranet::find(1);
        
        return new App\Mail\SignUpExtranet($user);
    });

    Route::get('/extranet/booking', function () {
        $user = App\Extranet::find(1);
        
        return new App\Mail\BookingExtranet;
    });

    Route::get('/customer/booking', function () {
        $user = App\Extranet::find(1);
        
        return new App\Mail\BookingCustomer;
    });
});