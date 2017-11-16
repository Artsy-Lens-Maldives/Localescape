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
Route::get('/all', 'Api/ApiAccomodationsController@index');

// Accommodation Routes (Start)
Route::get('/hotels', 'AccomodationsController@hotel');
Route::get('/hotels/{slug}', 'AccomodationsController@hotel_detail');

Route::get('/resorts', 'AccomodationsController@resort');
Route::get('/resorts/{slug}', 'AccomodationsController@resort_detail');

Route::get('/guest-house', 'AccomodationsController@guesthouse');
Route::get('/guest-house/{slug}', 'AccomodationsController@guesthouse_detail');
// Accommodation Routes (End)

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
