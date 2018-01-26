<?php

namespace App\Http\Controllers;

use App\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BookingController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("bookings.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($acco_id, $room_id, Request $request)
    {
        $booking = booking::create(Input::except('_token'));
        $booking->acco_id = $acco_id;
        $booking->room_id = $room_id;
        $booking->user_id = Auth::user()->id;
        $booking->save();
        return redirect()->back()->with('alert-success', 'Booking Successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = \App\booking::findorfail($id);
        return view ('bookings.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, booking $booking)
    {
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->checkin = $request->checkin;
        $booking->checkout = $request->checkout;
        $booking->eta = $request->eta;
        $booking->flightnumber = $request->flightnumber;
        $booking->save();
        return redirect('/admin/bookings/accommodations')->with('alert-success', 'Successfully Edited the Booking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(booking $booking)
    {
        //
    }
}
