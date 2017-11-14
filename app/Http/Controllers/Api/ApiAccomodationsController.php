<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiAccomodationsController extends Controller
{
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

}
