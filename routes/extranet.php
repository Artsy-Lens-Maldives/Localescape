<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('extranet')->user();

    //dd($users);

    return view('extranet.home');
})->name('home');


Route::get('/', function () {
    return redirect('extranet/accommodations');
    
});

Route::get('/profile', function () {
    return view('extranet.profile');
});

Route::prefix('accommodations')->group(function () {
    //Accommodation Route
    Route::get('/', 'AccomodationsController@all');
    Route::get('/add', 'AccomodationsController@create');
    Route::post('/add', 'AccomodationsController@store');
    Route::get('/edit/{id}', 'AccomodationsController@edit');
    Route::post('/edit/{id}', 'AccomodationsController@update');
    Route::get('/delete/{accomodations}', 'AccomodationsController@destroy');

    Route::get('/images/{id}', 'AccommoPhotoController@index');
    Route::get('/images/{id}/{accommo_photo}/delete', 'AccommoPhotoController@destroy');
    Route::get('/images/{id}/{accommo_photo}/main', 'AccommoPhotoController@main');
    Route::post('/images/{id}/new', 'AccommoPhotoController@store');

    Route::get('/preview/{id}', 'AccomodationsController@preview');

    //Booking Route
    Route::get('/bookings', function () {
        return view('extranet.accommodations.bookings');
    }); 
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
