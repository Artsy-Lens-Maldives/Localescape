<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('photopackage')->user();

    //dd($users);

    return view('photopackage.home');
})->name('home');

