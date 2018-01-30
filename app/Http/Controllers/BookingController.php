<?php

namespace App\Http\Controllers;

use App\booking;
use App\Settings;
use App\Accomodations;
use App\accommo_room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Alert;
use Illuminate\Support\Facades\Mail;

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
    public function create(Request $request)
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
    public function store(Request $request)
    {
        $tax = Settings::find('1');
        $accommodation = Accomodations::find($request->acco_id);
        $room = accommo_room::find($request->room_id);
        $check_in = Carbon::parse($request->checkin);
        $check_out = Carbon::parse($request->checkout);
        $adults = $request->adults;
        $child = $request->children;

        $days = $check_out->diffInDays($check_in);
        $tp_adult = $adults * $room->price_adult * $days;
        $tp_child = $child * $room->price_child * $days;
        
        $booking = booking::create(Input::except('_token'));
        $booking->user_id = auth()->user()->id;
        $booking->adults = $adults;
        $booking->nights = $days;

        $total = $tp_adult + $tp_child;
        if ($tax->tax == '1') {
            $tax_total = $total + ($total * ($tax->tax_percentage / 100));
            $booking->price = $tax_total;
        } else {
            $booking->price = $total;
        }
        $booking->save();

        Alert::success('Booking Successfully created');
        
        Mail::to($request->email)
            ->send(new \App\Mail\BookingCustomer($booking));

        Mail::to($booking->room->accommodation->extranet->email)
            ->send(new \App\Mail\BookingExtranet($booking));

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
        $booking = booking::findOrFail($id);
        return view('bookings.edit', compact('booking'));

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

    public function cancellation_request($id)
    {
        $booking = booking::findOrFail($id);
        
        if ($booking->cancellation_request == 0){
            $booking->booking_cancellation_requested = 1;
            $booking->booking_confirmed = 0;
            $booking->booking_requested = 0;
            $booking->booking_not_available = 0;
            $booking->booking_cancelled = 0;
            $booking->save();

            Mail::to($booking->email)
                ->send(new \App\Mail\bookingCancellationRequestCustomer($booking));

            Mail::to($booking->room->accommodation->extranet->email)
                ->send(new \App\Mail\bookingCancellationRequestExtranet($booking));
            return redirect()->back()->with('alert-success', 'Booking cancellation request sent');
        } else {
            return redirect()->back();
        }
        
    }

    public function cancel($id)
    {
        $booking = booking::findOrFail($id);
        $booking->booking_cancelled = 1;
        $booking->booking_requested = 0;
        $booking->booking_confirmed = 0;
        $booking->booking_cancellation_requested = 0;
        $booking->booking_not_available = 0;
        $booking->save();

        Mail::to($booking->email)
            ->send(new \App\Mail\bookingCancellationConfirmedCustomer($booking));

        Mail::to($booking->room->accommodation->extranet->email)
            ->send(new \App\Mail\bookingCancellationConfirmedExtranet($booking));

        return redirect()->back();        
    }

    public function confirm($id)
    {
        $booking = booking::findOrFail($id);
        $booking->booking_confirmed = 1;
        $booking->booking_requested = 0;
        $booking->booking_cancelled = 0;
        $booking->booking_cancellation_requested = 0;
        $booking->booking_not_available = 0;
        $booking->save();

        Mail::to($booking->email)
            ->send(new \App\Mail\bookingConfirmedCustomer($booking));

        Mail::to($booking->room->accommodation->extranet->email)
            ->send(new \App\Mail\bookingConfirmedExtranet($booking));
        
        return redirect()->back();
    }

    public function notAvailable($id)
    {
        $booking = booking::findOrFail($id);
        $booking->booking_not_available = 1;
        $booking->booking_confirmed = 0;
        $booking->booking_requested = 0;
        $booking->booking_cancelled = 0;
        $booking->booking_cancellation_requested = 0;
        $booking->save();

        Mail::to($booking->email)
            ->send(new \App\Mail\bookingNotAvailableCustomer($booking));

        Mail::to($booking->room->accommodation->extranet->email)
            ->send(new \App\Mail\bookingNotAvailableExtranet($booking));
        
        return redirect()->back();
    }

}
