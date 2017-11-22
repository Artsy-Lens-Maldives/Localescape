<?php

namespace App\Http\Controllers;

use App\Accomodations;
use App\accommo_photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Filesystem;

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

    public function all()
    {
        $accommodations = Accomodations::all();
        return view('extranet.accommodations.all', compact('accommodations'));
    }

    public function create()
    {
        $facilities = \App\facilities::all();
        return view('extranet.accommodations.submit', compact('facilities'));
    }

    public function store(Request $request)
    {
        $accommodations = Accomodations::create(Input::except('_token', 'image', 'facilities'));
        $array = $request->facilities;
        $accommodations->facilities = implode("," ,$array);
        $accommodations->save();
        
        $i = 0;
        foreach ($request->image as $photo) {
            $i++;
            if ($i == '1'){
                $m = '1';
            } else {
                $m = '0';
            }
            $fileName = $accommodations->slug . '-' . time() . '-' . $photo->getClientOriginalName();
            $location = 'public/' . $accommodations->slug . '/images'; 
            $file = $photo->storeAs($location, $fileName);
            accommo_photo::create([
                'accommo_id' => $accommodations->id,
                'main' => $m,
                'photo_url' => '/'. $accommodations->type . '/' . $accommodations->slug . '/' . 'photo/' . $fileName
            ]);
        }

        return redirect('extranet/accommodations')->with('alert-success', 'Successfully added new accommodation');
    }

    public function edit($id)
    {
        $acco = Accomodations::find($id);
        $facilities = \App\facilities::all();
        return view('extranet.accommodations.edit', compact('acco', 'facilities'));
    }

    public function update($id)
    {
        $acco = Accomodations::find($id);
        $acco->title = $request->title;
        $acco->type = $request->type;
        $acco->description = $request->description;
        $acco->special_offer = $request->special_offer;
        $acco->percents = $request->percents;
        $acco->{'special-offer-text'} = $request->{'special-offer-text'};
        $acco->receive_reviews = $request->receive_reviews;
        $acco->minimum_stay = $request->minimum_stay;
        $acco->address = $request->address;
        $acco->latitude = $request->latitude;
        $acco->longitude = $request->longitude;
        $acco->email = $request->email;
        $acco->phone = $request->phone;
        $acco->{'mobile-phone'} = $request->{'mobile-phone'};
        $acco->facebook = $request->facebook;
        $acco->twitter = $request->twitter;
        $acco->youtube = $request->youtube;
        $acco->website = $request->website;
        $acco->charge_childeren = $request->charge_childeren;
        $acco->pets = $request->pets;
        $acco->cancellation = $request->cancellation;
        $acco->other_policies = $request->other_policies;
        $acco->{'check-in-from'} = $request->{'check-in-from'};
        $acco->{'check-in-to'} = $request->{'check-in-to'};
        $acco->early_check_in = $request->early_check_in;
        $acco->{'check-out-from'} = $request->{'check-out-from'};
        $acco->{'check-out-to'} = $request->{'check-out-to'};
        $acco->late_check_out = $request->late_check_out;
        $array = $request->facilities;
        $acco->facilities = implode("," ,$array);
        $acco->save();

        return redirect('extranet/accommodations')->with('alert-success', 'Successfully edited accommodation');
    }

}
