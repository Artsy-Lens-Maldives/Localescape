<?php
use App\Accomodations;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');


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