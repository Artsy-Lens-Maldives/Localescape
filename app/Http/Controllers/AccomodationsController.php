<?php

namespace App\Http\Controllers;

use App\Accomodations;
use Illuminate\Http\Request;

class AccomodationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $take = $request->take;
        $type = $request->type;

        if ($request->has('type') && $request->has('take')) {
            return Accomodations::type($type)->take($take)->get();
        }
        if ($request->has('type')) {
            return Accomodations::type($type)->get();
        }
        if ($request->has('take')) {
            return Accomodations::take($take)->get();
        }
        return Accomodations::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accomodations  $accomodations
     * @return \Illuminate\Http\Response
     */
    public function show($type, Accomodations $accomodations)
    {
        return $accomodations;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accomodations  $accomodations
     * @return \Illuminate\Http\Response
     */
    public function edit(Accomodations $accomodations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accomodations  $accomodations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accomodations $accomodations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accomodations  $accomodations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accomodations $accomodations)
    {
        //
    }
}
