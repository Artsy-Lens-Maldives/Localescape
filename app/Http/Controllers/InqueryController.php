<?php

namespace App\Http\Controllers;

use App\inquery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class InqueryController extends Controller
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
        $tax = \App\Settings::find('1');
        $accommodation = Accomodations::find($request->accommodation);
        $room = \App\accommo_room::find($request->room);
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

        return view('inquery.newCreate', compact('room', 'check_in', 'check_out','adults' , 'child', 'days', 'tp_adult', 'tp_child', 'total', 'room_photo', 'tax', 'tax_total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tax = \App\Settings::find('1');
        $accommodation = Accomodations::find($request->acco_id);
        $room = \App\accommo_room::find($request->room_id);
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
        
        $booking = \App\inquery::create(Input::except('_token'));
        $booking->user_id = auth()->user()->id;
        $booking->save();

        Alert::success('Inquiry Successfully created');
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inquery  $inquery
     * @return \Illuminate\Http\Response
     */
    public function show(inquery $inquery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inquery  $inquery
     * @return \Illuminate\Http\Response
     */
    public function edit(inquery $inquery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inquery  $inquery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inquery $inquery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inquery  $inquery
     * @return \Illuminate\Http\Response
     */
    public function destroy(inquery $inquery)
    {
        //
    }
}
