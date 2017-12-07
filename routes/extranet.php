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
    Route::get('/delete/{accomodations}', 'AccomodationsController@destroy');

    Route::get('/images/{id}', 'AccommoPhotoController@index');
    Route::get('/images/{id}/{accommo_photo}/delete', 'AccommoPhotoController@destroy');
    Route::get('/images/{id}/{accommo_photo}/main', 'AccommoPhotoController@main');
    Route::post('/images/{id}/new', 'AccommoPhotoController@store');
    
    Route::post('/images/{id}/room/{room_id}', function ($id, $room_id, Request $request) {
        $accommodations = Accomodations::find($id);
        $room = \App\accommo_room::find($room_id);

        $i = 0;
        foreach ($request->image as $photo) {            
            $i++;
            if ($i == '1'){
                $m = '1';
            } else {
                $m = '0';
            }
            //File names and location
            $fileName = $room->room_type.'-'.time().'-'.$photo->getClientOriginalName();
            $location_o = $accommodations->type.'/'.$accommodations->slug.'/rooms'.'/'.$room->room_type.'/original'.'/'.$fileName;
            $location_t = $accommodations->type.'/'.$accommodations->slug.'/rooms'.'/'.$room->room_type.'/thumbnail'.'/'.$fileName;
            
            $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));

            //Original Image
            $original = Image::make($photo)->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $s3->put($location_o, $original->stream()->__toString(), 'public');
            //Thumbnail image
            $thumbnail = Image::make($photo)->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $s3->put($location_t, $thumbnail->stream()->__toString(), 'public');

            \App\Room_Image::create([
                'accommo_id' => $id,
                'room_id' => $id,
                'main' => $m,
                'photo_url' => $location_o,
                'thumbnail' => $location_t,
            ]);
        }

        return redirect()->back()->with('alert-success', 'Successfully added new image(s)');
    });
    

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
