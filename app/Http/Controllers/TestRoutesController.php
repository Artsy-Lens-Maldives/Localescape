<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accomodations;
use App\accommo_photo;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Filesystem;
use Carbon\Carbon;
use Image;

class TestRoutesController extends Controller
{
    public function ApiAccommodationNameList()
    {
        $accommodations = Accomodations::all();
        $names = array();
        foreach($accommodations as $accommodation) {
            array_push($names, $accommodation->title);
            array_push($names, $accommodation->address);
        }
        return array_unique($names);
    }

    public function ImageFromStorageWithResize($type, $slug, $filename)
    {
        $fileloc = 'app/public/' . $slug . '/' . 'images/' . $filename;
        $path = storage_path($fileloc);

        $failed = "It failed";
        
        if (!File::exists($path)) {
        return $failed;
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $img = Image::cache(function($image) use ($file) {
            $image->make($file)->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
            });
        }, 100, false);
        
        $response = Response::make($img, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    public function ImageFromStorage($type, $slug, $filename)
    {
        $fileloc = 'app/public/' . $slug . '/' . 'images/' . $filename;
        $path = storage_path($fileloc);

        $failed = "It failed";
        
        if (!File::exists($path)) {
        return $failed;
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    public function ImageTest()
    {
        $img = Image::make('https://i.ytimg.com/vi/yaqe1qesQ8c/maxresdefault.jpg')->resize(300, 200);
        return $img->response('jpg');
    }

    public function FacilitiesDump()
    {
        $stuffs = 'Shower, Bathtub, Free toiletries, Toilet, Hairdryer, Bathroom, Satellite channels, Flat-screen TV, TV, Desk, Sofa, Sitting area, Dining area, Room Service, Packed Lunches, Car Rental, Shuttle Service, Tour Desk, Ticket Service, Baggage Storage, Concierge Service, Laundry, Dry Cleaning, Safe, Non-smoking Rooms, Family Rooms, Elevator, Airport Shuttle, 24-Hour Front Desk, Soundproof Rooms, Heating, Iron';
        $array_items = explode(', ', $stuffs);
        foreach ($array_items as $name) {
            $flight = new \App\facilities;
            $flight->name = $name;
            $flight->save();
            echo 'Done';
        }
        echo 'Fully DOne';
    }
}
