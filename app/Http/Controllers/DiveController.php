<?php

namespace App\Http\Controllers;

use App\dive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DiveController extends Controller
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
        return view("dive.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dive::create(Input::except('_token'));
        return redirect()->back()->with('alert-success', 'Successfully added new Dive Package');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dive  $dive
     * @return \Illuminate\Http\Response
     */
    public function show(dive $dive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dive  $dive
     * @return \Illuminate\Http\Response
     */
    public function edit(dive $dive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dive  $dive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dive $dive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dive  $dive
     * @return \Illuminate\Http\Response
     */
    public function destroy(dive $dive)
    {
        //
    }
}
