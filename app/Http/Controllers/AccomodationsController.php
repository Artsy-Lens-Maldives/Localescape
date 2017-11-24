<?php

namespace App\Http\Controllers;

use App\Accomodations;
use App\accommo_photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Auth;

class AccomodationsController extends Controller
{
    public function hotel()
    {
        $type = "Hotels";
        $accommodations = Accomodations::where('type', 'hotel')->where('active', '1')->paginate(15);
        return view('accommodations.listings', compact('type', 'accommodations'));
    }

    public function hotel_detail($slug)
    {
        $type = "Hotel";
        $facilities = \App\facilities::all();
        $accommodation = Accomodations::where('slug', $slug)->where('active', '1')->first();
        return view('accommodations.details', compact('type', 'accommodation', 'facilities'));
    }
    
    public function resort()
    {
        $type = "Resorts";
        $accommodations = Accomodations::where('type', 'resort')->where('active', '1')->paginate(15);
        return view('accommodations.listings', compact('type', 'accommodations'));
    }

    public function resort_detail($slug)
    {
        $type = "Resorts";
        $facilities = \App\facilities::all();
        $accommodation = Accomodations::where('slug', $slug)->where('active', '1')->first();
        return view('accommodations.details', compact('type', 'accommodation', 'facilities'));
    }
    
    public function guesthouse()
    {
        $type = "Guest House";
        $accommodations = Accomodations::where('type', 'guest-house')->where('active', '1')->paginate(15);
        return view('accommodations.listings', compact('type', 'accommodations'));
    }

    public function guesthouse_detail($slug)
    {
        $type = "Guest House";
        $facilities = \App\facilities::all();
        $accommodation = Accomodations::where('slug', $slug)->where('active', '1')->first();
        return view('accommodations.details', compact('type', 'accommodation', 'facilities'));
    }

    public function all()
    {
        $accommodations = Accomodations::where('user_id', Auth::guard('extranet')->user()->id)->get();
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
        $accommodations->user_id = Auth::guard('extranet')->user()->id;
        $accommodations->save();
        
        $i = 0;
        foreach ($request->image as $photo) {
            $i++;
            if ($i == '1'){
                $m = '1';
            } else {
                $m = '0';
            }
            //File names and location
            $fileName = $accommodations->slug . '-' . time() . '-' . $photo->getClientOriginalName();
            $location_o = $accommodations->type.'/'.$accommodations->slug.'/original'.'/'.$fileName;
            $location_t = $accommodations->type.'/'.$accommodations->slug.'/thumbnail'.'/'.$fileName;
            
            $s3 = \Storage::disk('s3');

            //Original Image
            $original = Image::make($photo)->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $s3->put($location_o, $original->stream()->__toString(), 'public');
            //Thumbnail image
            $thumbnail = Image::make($photo)->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $s3->put($location_t, $thumbnail->stream()->__toString(), 'public');

            accommo_photo::create([
                'accommo_id' => $accommodations->id,
                'main' => $m,
                'photo_url' => $location_o,
                'thumbnail' => $location_t,
            ]);
        }

        return redirect('extranet/accommodations')->with('alert-success', 'Successfully added new accommodation');
    }

    public function edit($id)
    {
        $acco = Accomodations::find($id);
        $facilities = \App\facilities::all();
        if($acco->user_id == Auth::guard('extranet')->user()->id){
            return view('extranet.accommodations.edit', compact('acco', 'facilities'));
        } else {
            return redirect('extranet/accommodations');
        }
    }

    public function update($id, Request $request)
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

    public function destroy(Accomodations $accomodations)
    {
        if($accomodations->user_id == Auth::guard('extranet')->user()->id){
            $accomodations->delete();
            return redirect()->back()->with('alert-success', 'Successfully deleted the accommodation');
        } else {
            return redirect('extranet/accommodations');
        }
    }

}
