<?php

use App\Accomodations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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

Route::get('/blog-detail', function () {
    return view('blog.detail');
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
            $accommodations = App\Accomodations::all();
            return view('extranet.accommodations.all', compact('accommodations'));
        });

        Route::get('/add', function () {
            return view('extranet.accommodations.submit');
        });

        Route::post('/add', function (Request $request) {
            $accommodations = Accomodations::create(Input::except('_token', 'files', 'facilities'));
            $array = $request->facilities;
            $accommodations->facilities = implode("," ,$array);
            $accommodations->save();
            return 'success';
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
