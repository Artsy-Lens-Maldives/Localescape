<?php

namespace App\Http\Controllers;

use App\photopanel;
use Illuminate\Http\Request;

class PhotopanelController extends Controller
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
        return view("photo.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        photopanel::create(Input::except('_token'));
        return redirect()->back()->with('alert-success', 'Successfully added new Photo Package');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\photopanel  $photopanel
     * @return \Illuminate\Http\Response
     */
    public function show(photopanel $photopanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\photopanel  $photopanel
     * @return \Illuminate\Http\Response
     */
    public function edit(photopanel $photopanel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\photopanel  $photopanel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, photopanel $photopanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\photopanel  $photopanel
     * @return \Illuminate\Http\Response
     */
    public function destroy(photopanel $photopanel)
    {
        //
    }
}
