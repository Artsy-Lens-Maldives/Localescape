<?php

use App\Accomodations;
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

Route::get('/blog/create', function () {
    return view('blog.create');
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
            
            $i = 0;
            foreach ($request->files as $photo) {
                $i++;
                if ($i == '1'){
                    $m = '1';
                } else {
                    $m = '0';
                }
                $fileName = $accommodations->slug . '-' . time() . '-' . $photo->getClientOriginalName();
                $location = 'public/' . $accommodations->slug . '/images'; 
                $file = $photo->storeAs($location, $fileName);
                liveaboard_photo::create([
                    'liveaboard_id' => $accommodations->id,
                    'main' => $m,
                    'photo_url' => '/'. $accommodations->type . '/' . $accommodations->slug . '/' . 'photo/' . $fileName
                ]);
            }

            return 'success';
        });

        Route::get('/edit/{id}', function ($id) {
            $acco = App\Accomodations::find($id);
            return view('extranet.accommodations.edit', compact('acco'));
        }); 

        Route::post('/edit/{id}', function ($id, Request $request) {
            $acco = App\Accomodations::find($id);
            
            $acco->title = $request->title;
            $acco->type = $request->type;
            $acco->description = $request->description;
            $acco->special_offer = $request->special_offer;
            $acco->percents = $request->percents;
            $acco->{'special-offer-text'} = $request->{'special-offer-text'};
            $acco->receive_reviews = $request->receive_reviews;
            $acco->minimum_stay = $request->minimum_stay;
            $acco->address = $request->address;
            $acco->latitude = $request->latitude;
            $acco->longitude = $request->longitude;
            $acco->email = $request->email;
            $acco->phone = $request->phone;
            $acco->{'mobile-phone'} = $request->{'mobile-phone'};
            $acco->facebook = $request->facebook;
            $acco->twitter = $request->twitter;
            $acco->youtube = $request->youtube;
            $acco->website = $request->website;
            $acco->charge_childeren = $request->charge_childeren;
            $acco->pets = $request->pets;
            $acco->cancellation = $request->cancellation;
            $acco->other_policies = $request->other_policies;
            $acco->{'check-in-from'} = $request->{'check-in-from'};
            $acco->{'check-in-to'} = $request->{'check-in-to'};
            $acco->early_check_in = $request->early_check_in;
            $acco->{'check-out-from'} = $request->{'check-out-from'};
            $acco->{'check-out-to'} = $request->{'check-out-to'};
            $acco->late_check_out = $request->late_check_out;

            $acco->save();

            return 'edited';
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
