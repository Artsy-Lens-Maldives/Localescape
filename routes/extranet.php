<?php

Route::get('/home', function () {
    $users = Auth::guard('extranet')->user();

    //dd($users);

    return view('extranet.home', compact('users'));
})->name('home');


Route::get('/', function () {
    return redirect('extranet/accommodations');
    
});

Route::get('/profile', function () {
    $users = Auth::guard('extranet')->user();
    return view('extranet.profile', compact('users'));
});

Route::prefix('accommodations')->group(function () {
    //Accommodation Route
    Route::get('/', 'AccomodationsController@all');
    Route::get('/add', 'AccomodationsController@create');
    Route::post('/add', 'AccomodationsController@store');
    Route::get('/edit/{id}', 'AccomodationsController@edit');
    Route::post('/edit/{id}', 'AccomodationsController@update');
    Route::get('/delete/{id}', 'AccomodationsController@destroy');

    Route::get('/images/{id}', 'AccommoPhotoController@index');
    Route::get('/images/{id}/{accommo_photo}/delete', 'AccommoPhotoController@destroy');
    Route::get('/images/{id}/{accommo_photo}/main', 'AccommoPhotoController@main');
    Route::post('/images/{id}/new', 'AccommoPhotoController@store');
    Route::post('/images/{id}/room/{room_id}', 'RoomImageController@store');

    Route::get('/preview/{id}', 'AccomodationsController@preview');

    //Review Route
    Route::get('/reviews', function () {
        return view('extranet.accommodations.reviews');
    }); 
    Route::prefix('rooms')->group(function () {
        Route::get('{id}', 'AccommoRoomController@index');
        Route::get('{id}/add', 'AccommoRoomController@create');
        Route::post('{id}/add', 'AccommoRoomController@store');
        Route::get('edit/{accommo_room}', 'AccommoRoomController@edit');
        Route::post('edit/{accommo_room}', 'AccommoRoomController@update');
        Route::get('delete/{accommo_room}', 'AccommoRoomController@destroy');
    });

});

//Booking Routes
Route::prefix('bookings')->group(function () {
    Route::get('/', function () {
        $bookings = \App\booking::all();
        return view('extranet.bookings.index', compact('bookings'));
    });
    Route::get('/cancel/{id}', 'BookingController@cancel');
    Route::get('/confirm/{id}', function ($id) {
        $booking = \App\booking::findOrFail($id);
        $booking->booking_confirmed = 1;
        $booking->booking_requested = 0;
        $booking->booking_cancelled = 0;
        $booking->booking_cancellation_requested = 0;
        $booking->save();
        return redirect()->back();
    }); 
});