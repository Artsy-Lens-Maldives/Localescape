<?php

namespace App\Http\Controllers;

use App\booking;
use App\Settings;
use App\Accomodations;
use App\accommo_room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

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
        $tax = Settings::find('1');    
        $accommodation = Accomodations::find($request->accommodation);
        $room = accommo_room::find($request->room);
        $check_in = Carbon::parse($request->check_in);
        $check_out = Carbon::parse($request->check_out);
        $adults = $request->adults;
        $child = $request->child;

        $days = $check_out->diffInDays($check_in);
        $tp_adult = $adults * $room->price_adult * $days;
        $tp_child = $child * $room->price_child * $days;
        
        $total = $tp_adult + $tp_child;
        if ($tax->tax == '1') {
            $tax_total = $total + ($total * ($tax->tax_percentage / 100));
        }
        
        $room_photo = $room->photos->where('main', 1)->first();

        return view('bookings.newCreate', compact('room', 'check_in', 'check_out','adults' , 'child', 'days', 'tp_adult', 'tp_child', 'total', 'room_photo', 'tax', 'tax_total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($acco_id, $room_id, Request $request)
    {
        $tax = Settings::find('1');
        $accommodation = Accomodations::find($request->acco_id);
        $room = accommo_room::find($request->room_id);
        $check_in = Carbon::parse($request->check_in);
        $check_out = Carbon::parse($request->check_out);
        $adults = $request->adults;
        $child = $request->child;

        $days = $check_out->diffInDays($check_in);
        $tp_adult = $adults * $room->price_adult * $days;
        $tp_child = $child * $room->price_child * $days;
        
        $total = $tp_adult + $tp_child;
        if ($tax->tax == '1') {
            $tax_total = $total + ($total * ($tax->tax_percentage / 100));
        }
        
        $booking = booking::create(Input::except('_token'));
        $booking->user_id = auth()->user()->id;
        $booking->save();

        Alert::success('Booking Successfully created');
        
        return redirect()->back();
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
        //
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
        //
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
