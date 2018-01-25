<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;
use App\Accomodations;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $last_booking = booking::where('user_id', auth()->user()->id)->latest()->first();
        $upcoming_booking = booking::where('user_id', auth()->user()->id)->latest()->first();
        $now = Carbon::now();
        $skip = $now->month + 5;
        $accommodations = Accomodations::skip($skip)->take(4)->get();
        return view('home', compact('last_booking', 'upcoming_booking', 'accommodations'));
    }
}
