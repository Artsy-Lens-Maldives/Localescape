<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('extranet')->user();

    //dd($users);

    return view('extranet.home');
})->name('home');

