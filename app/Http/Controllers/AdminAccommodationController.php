<?php

namespace App\Http\Controllers;

use App\Accomodations;
use App\accommo_photo;
use App\accommo_room;
use App\Room_Image;
use App\Extranet;
use App\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mohamedathik\PhotoUpload\Upload;

class AdminAccommodationController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accommodations = Accomodations::all();
        return view('admin.accommodation.all', compact('accommodations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accommodations = Accomodations::all();
        $facilities = \App\facilities::all();

        $extranet_users = \App\Extranet::all();

        $settings = \App\settings::find('1');
        $categories = explode(',', $settings->categories);
        
        return view('admin.accommodation.create', compact('accommodations', 'facilities', 'categories', 'extranet_users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accommodation = Accomodations::create(Input::except('_token', 'image', 'facilities'));
        $array = $request->facilities;
        if($array) {
            $accommodation->facilities = implode("," ,$array);
        }
        $accommodation->user_id = '0';
        $accommodation->save();

        // Upload image
        $i = 0;
        foreach ($request->image as $photo) {
            $i++;
            $m = ($i == '1') ? '1' : '0';

            $file_name = $accommodation->slug.'-'.time().'-'.$photo->getClientOriginalName();
            $location = $accommodation->type.'/'.$accommodation->slug;

            $url_original = Upload::upload_original($photo, $file_name, $location);
            $url_thumbnail = Upload::upload_thumbnail($photo, $file_name, $location);

            accommo_photo::create([
                'accommo_id' => $accommodation->id,
                'main' => $m,
                'photo_url' => $url_original,
                'thumbnail' => $url_thumbnail,
            ]);
        }

        return redirect('admin/accommodations')->with('alert-success', 'Successfully added new accommodation');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acco = Accomodations::find($id);
        $facilities = facilities::all();

        $extranet_users = Extranet::all();

        $settings = settings::find('1');
        $categories = explode(',', $settings->categories);

        return view('admin.accommodation.edit', compact('acco', 'facilities', 'categories', 'extranet_users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $acco = Accomodations::find($id);
        $acco->user_id = $request->user_id;
        $acco->title = $request->title;
        $acco->type = $request->type;
        $acco->description = $request->description;
        $acco->special_offer = $request->special_offer;
        $acco->percents = $request->percents;
        $acco->rating = $request->rating;
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

        return redirect('admin/accommodations')->with('alert-success', 'Successfully edited the accommodation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accommodation = Accomodations::find($id);

        //Delete Photos
        $photos = $accommodation->photos;
        if(!$photos->isEmpty()){
            foreach ($photos as $photo) {
                $original = Helper::delete_image_s3($photo->photo_url);
                $thumbnail = Helper::delete_image_s3($photo->thumbnail);
            }
        }

        $rooms = $accommodation->rooms;
        //Delete Rooms
        if(!$rooms->isEmpty()){
            foreach ($rooms as $room) {
                //Delete Room Photos
                $room_photos = $room->photos;
                if(!$room_photos->isEmpty()){
                    foreach ($room_photos as $room_photo) {
                        $r_original = Helper::delete_image_s3($room_photo->photo_url);
                        $r_thumbnail = Helper::delete_image_s3($room_photo->thumbnail);
                    }
                }
                $room->delete();
            }
        }

        // Delete Accommodation
        $accommodation->delete();
        return redirect()->back()->with('alert-success', 'Successfully deleted the accommodation');
    }

    private function uploadImage($file, $file_name, $location)
    {
        //
    }

    public function image($id) 
    {
        $acco = Accomodations::find($id);
        return view('admin.accommodation.photo', compact('acco'));
    }

    public function imagePost(Request $request, $id) 
    {
        $accommodation = Accomodations::find($id);

        foreach ($request->image as $photo) {
            $file_name = $accommodation->slug.'-'.time().'-'.$photo->getClientOriginalName();
            $location = $accommodation->type.'/'.$accommodation->slug;

            $url_original = Upload::upload_original($photo, $file_name, $location);
            $url_thumbnail = Upload::upload_thumbnail($photo, $file_name, $location);

            accommo_photo::create([
                'accommo_id' => $accommodation->id,
                'main' => '0',
                'photo_url' => $url_original,
                'thumbnail' => $url_thumbnail,
            ]);
        }

        return redirect()->back()->with('alert-success', 'Successfully added new image(s) to accommodation');
    }

    public function roomImagePost($id, $room_id, Request $request) 
    {
        $accommodation = Accomodations::find($id);
        $room = accommo_room::find($room_id);

        $i = 0;
        foreach ($request->image as $photo) {
            $i++;
            $m = ($i == '1') ? '1' : '0';

            $file_name = $room->room_type.'-'.time().'-'.$photo->getClientOriginalName();
            $location = $accommodation->type.'/'.$accommodation->slug.'/rooms'.'/'.$room->room_type;

            $url_original = Upload::upload_original($photo, $file_name, $location);
            $url_thumbnail = Upload::upload_thumbnail($photo, $file_name, $location);

            Room_Image::create([
                'accommo_id' => $id,
                'room_id' => $room_id,
                'main' => $m,
                'photo_url' => $url_original,
                'thumbnail' => $url_thumbnail,
            ]);
        }
        return redirect()->back()->with('alert-success', 'Successfully added new image(s) to the room');
    }

    public function approve($id)
    {
        $acco = Accomodations::find($id);
        return view('admin.accommodation.approve', compact('acco'));
    }

    public function approvePost($id, Request $request)
    {
        $acco = Accomodations::find($id);
        $acco->active = ($request->active == '1') ? '1' : '0';
        $acco->status = $request->status;
        $acco->save(); 
        return redirect('admin/accommodations')->with('alert-success', 'Accommdation approve successfully');
    }
}
