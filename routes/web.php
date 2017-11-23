<?php

use App\Accomodations;
use App\accommo_photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Filesystem;
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

Route::get('/all2', function () {
    $flights = App\Accomodations::all();
    return $flights;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all', 'Api/ApiAccomodationsController@index');

// Accommodation Routes (Start)
Route::get('/hotels', 'AccomodationsController@hotel');
Route::get('/hotels/{slug}', 'AccomodationsController@hotel_detail');

Route::get('/resorts', 'AccomodationsController@resort');
Route::get('/resorts/{slug}', 'AccomodationsController@resort_detail');

Route::get('/guest-house', 'AccomodationsController@guesthouse');
Route::get('/guest-house/{slug}', 'AccomodationsController@guesthouse_detail');
// Accommodation Routes (End)

Route::get('/blog', function () {
    return view('blog.all');
});

//Photo Url
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


Route::get('/booking/create', 'BookingController@create');
Route::post('/booking/create/success', 'BookingController@store');

Route::get('/inquery/create', 'InqueryController@create');
Route::post('/inquery/create/success', 'InqueryController@store');

Route::group(['prefix' => 'extranet'], function () {
    Route::get('/login', 'ExtranetAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'ExtranetAuth\LoginController@login');
    Route::post('/logout', 'ExtranetAuth\LoginController@logout')->name('logout');

    Route::get('/register', 'ExtranetAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'ExtranetAuth\RegisterController@register');

    Route::post('/password/email', 'ExtranetAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'ExtranetAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'ExtranetAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'ExtranetAuth\ResetPasswordController@showResetForm');
});

Route::get('/admin/blog', function () {
    $blogs = \App\blog::all();
    return view('blog.view', compact('blogs'));
});

Route::get('/admin/dive/all', function () {
    $dives = \App\dive::all();
    return view('dive.view', compact('dives'));
});

Route::get('/admin/photo/all', function () {
    $photopanels = \App\photopanel::all();
    return view('photo.view', compact('photopanels'));
});

Route::get('/admin/tour/all', function () {
    $tours = \App\tour::all();
    return view('tours.view', compact('tours'));
});

Route::get('/admin/bookings/all', function () {
    $bookings = \App\booking::all();
    return view('accommodations.view', compact('bookings'));
});

Route::get('/blog/create', 'BlogController@create');
Route::post('/blog/create/post', 'BlogController@store');

Route::get('/dive/create', 'DiveController@create');
Route::post('/dive/create/package', 'DiveController@store');

Route::get('/photo/create', 'PhotopanelController@create');
Route::post('/photo/create/package', 'PhotopanelController@store');

Route::get('/tour/create', 'TourController@create');
Route::post('/tour/create/package', 'TourController@store');

Route::get('/imagetest', function()
{
    $img = Image::make('foo.jpg')->resize(300, 200);

    return $img->response('jpg');
});
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});