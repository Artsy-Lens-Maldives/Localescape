<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('divepackage')->user();

    //dd($users);

    return view('divepackage.home');
})->name('home');

