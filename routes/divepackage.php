<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('divepackage')->user();

    //dd($users);

    return view('divepackage.home');
})->name('home');

Route::get('/all', function () {
    $dives = \App\dive::all();
    return view('dive.view', compact('dives'));
});

Route::get('/create', 'DiveController@create');
Route::post('/create', 'DiveController@store');
