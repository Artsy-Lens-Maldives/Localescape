<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\booking;
use App\Accomodations;
use App\App\inquery;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Facades\Auth;

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

    public function index()
    {
        $last_booking = booking::where('user_id', auth()->user()->id)->latest()->first();
        $now = Carbon::now();
        $skip = $now->month + 5;
        $accommodations = Accomodations::skip($skip)->take(4)->get();
        return view('home', compact('last_booking', 'upcoming_booking', 'accommodations'));
    }

    public function settings()
    {
        $user = Auth::user();
        return view('customer.settings', compact('user'));
    }

    public function profile(Request $request)
    {
        $user = Auth::user();
        $user->phone = $request->phone;
        $user->street = $request->street;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->zip = $request->zip;
        $user->save();
        return redirect()->back();
    }

    public function changePass()
    {
        return view('customer.changePass');
    }

    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
     
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }
        
    public function bookings()
    {
        $bookings = booking::where('user_id', auth()->user()->id)->get();
        return view('customer.booking',compact('bookings'));
    }

    public function inquiry()
    {
        $bookings = inquery::where('user_id', auth()->user()->id)->get();
        return view('customer.inquery',compact('bookings'));
    }

    public function inquiryView()
    {
        $booking = inquery::findorfail($id);
        return view('customer.inquerydetail', compact('booking'));
    }
    
}
