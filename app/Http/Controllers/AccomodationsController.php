<?php

namespace App\Http\Controllers;

use App\Accomodations;
use Illuminate\Http\Request;

class AccomodationsController extends Controller
{
    public function hotel()
    {
        $type = "Hotels";
        $accommodations = Accomodations::where('type', 'hotel')->paginate(15);
        return view('accommodations.listings', compact('type', 'accommodations'));
    }

    public function hotel_detail($slug)
    {
        $type = "Hotel";
        $accommodation = Accomodations::where('slug', $slug)->first();
        return view('accommodations.details', compact('type', 'accommodation'));
    }
    
    public function resort()
    {
        $type = "Resorts";
        $accommodations = Accomodations::where('type', 'resort')->paginate(15);
        return view('accommodations.listings', compact('type', 'accommodations'));
    }
    
    public function guesthouse()
    {
        $type = "Guest House";
        $accommodations = Accomodations::where('type', 'guest-house')->paginate(15);
        return view('accommodations.listings', compact('type', 'accommodations'));
    }

    public function create()
    {
        # code...
    }

    public function store(Request $request)
    {
        $accommodations = Accomodations::create(Input::except('_token', 'files'));
    }

}
