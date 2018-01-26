<?php

use App\Accomodations;
use App\accommo_photo;
use App\facilities;
use App\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Auth;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    // dd($users);

    return view('admin.home');
})->name('home');

Route::get('/', function () {
    return redirect('admin/home');
    
});

Route::group(['prefix' => 'accommodations'], function () {
    // List All
    Route::get('/', function () {
        $accommodations = Accomodations::all();
        return view('admin.accommodation.all', compact('accommodations'));
    });

    // Create New
    Route::get('/create', function () {
        $accommodations = Accomodations::all();
        $facilities = \App\facilities::all();

        $extranet_users = \App\Extranet::all();

        $settings = \App\settings::find('1');
        $categories = explode(',', $settings->categories);
        
        return view('admin.accommodation.create', compact('accommodations', 'facilities', 'categories', 'extranet_users'));
    });
    Route::post('/create', function (Request $request) {
        $accommodations = Accomodations::create(Input::except('_token', 'image', 'facilities'));
        
        $array = $request->facilities;
        if($array) {
            $accommodations->facilities = implode("," ,$array);
            $accommodations->user_id = Auth::guard('extranet')->user()->id;
            $accommodations->save();
        } else {
            $accommodations->user_id = Auth::guard('extranet')->user()->id;
            $accommodations->save();
        }
        
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
            
            $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));

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

        return redirect('admin/accommodations')->with('alert-success', 'Successfully added new accommodation');
    });

    //Delete
    Route::get('/delete/{id}', function ($id) {
        $accommodation = Accomodations::find($id);
        $accommodation->delete();
        return redirect()->back()->with('alert-success', 'Successfully deleted the accommodation');
    });

    // Image
    Route::get('/images/{id}', function ($id) {
        $acco = Accomodations::find($id);
        return view('admin.accommodation.photo', compact('acco'));
    });
    Route::post('/images/{id}/new', function ($id, Request $request) {
        $accommodations = Accomodations::find($id);
        
        foreach ($request->image as $photo) {            
            //File names and location
            $fileName = $accommodations->slug . '-' . time() . '-' . $photo->getClientOriginalName();
            $location_o = $accommodations->type.'/'.$accommodations->slug.'/original'.'/'.$fileName;
            $location_t = $accommodations->type.'/'.$accommodations->slug.'/thumbnail'.'/'.$fileName;
            
            $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));

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
                'main' => '0',
                'photo_url' => $location_o,
                'thumbnail' => $location_t,
            ]);
        }

        return redirect()->back()->with('alert-success', 'Successfully added new image(s)');
    });
    Route::get('/images/{id}/{accommo_photo}/delete', 'AccommoPhotoController@destroy');
    Route::get('/images/{id}/{accommo_photo}/main', 'AccommoPhotoController@main');
    Route::post('/images/{id}/room/{room_id}', function ($id, $room_id, Request $request) {
        $accommodations = Accomodations::find($id);
        $room = \App\accommo_room::find($room_id);

        $i = 0;
        foreach ($request->image as $photo) {            
            $i++;
            if ($i == '1'){
                $m = '1';
            } else {
                $m = '0';
            }
            //File names and location
            $fileName = $room->room_type.'-'.time().'-'.$photo->getClientOriginalName();
            $location_o = $accommodations->type.'/'.$accommodations->slug.'/rooms'.'/'.$room->room_type.'/original'.'/'.$fileName;
            $location_t = $accommodations->type.'/'.$accommodations->slug.'/rooms'.'/'.$room->room_type.'/thumbnail'.'/'.$fileName;
            
            $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));

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

            \App\Room_Image::create([
                'accommo_id' => $id,
                'room_id' => $id,
                'main' => $m,
                'photo_url' => $location_o,
                'thumbnail' => $location_t,
            ]);
        }

        return redirect()->back()->with('alert-success', 'Successfully added new image(s)');
    });

    //Edit
    Route::get('/edit/{id}', function ($id) {
        $acco = Accomodations::find($id);
        $facilities = facilities::all();

        $extranet_users = \App\Extranet::all();

        $settings = \App\settings::find('1');
        $categories = explode(',', $settings->categories);

        return view('admin.accommodation.edit', compact('acco', 'facilities', 'categories', 'extranet_users'));
    });
    Route::post('/edit/{id}', function ($id, Request $request) {
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
    });
    
    //Approve
    Route::get('/approve/{id}', function ($id) {
        $acco = Accomodations::find($id);
        return view('admin.accommodation.approve', compact('acco'));
    });
    Route::post('/approve/{id}', function ($id, Request $request) {
        $acco = Accomodations::find($id);
        if ($request->active == '1') {
            $acco->active = $request->active;
            $acco->status = $request->status;
            $acco->save();
        } else {
            $acco->active = '0';
            $acco->status = $request->status;
            $acco->save();
        }    
        return redirect('admin/accommodations');
        
    });

    //Room
    Route::group(['prefix' => 'rooms'], function () {
        Route::get('/{id}', function ($id) {
            $accommodation = Accomodations::find($id);
            return view('admin.accommodation.rooms.all', compact('accommodation'));
        }); 
        Route::get('{id}/add', function ($id) {
            $accommodation = Accomodations::find($id);
            return view('admin.accommodation.rooms.create', compact('accommodation'));
        });    
        Route::post('{id}/add', function ($id) {
            $accommodation = Accomodations::find($id);
            $rooms = \App\accommo_room::create(Input::except('_token'));
            $url = 'admin/accommodations/rooms/' . $id ; 
            return redirect($url)->with('alert-success', 'Successfully added new room');
        });
        Route::get('{id}/delete/{room_id}', function ($id, $room_id) {
            $accommodation = Accomodations::find($id);
            $room = \App\accommo_room::find($room_id);
            $room->delete();
            return redirect()->back()->with('alert-success', 'Successfully deleted the room');
        });
        Route::get('{id}/edit/{room_id}', function ($id, $room_id) {
            $accommodation = Accomodations::find($id);
            $room = \App\accommo_room::find($room_id);
            return view('admin.accommodation.rooms.edit', compact('accommodation', 'room'));
        });
        Route::post('{id}/edit/{room_id}', function ($id, $room_id, Request $request) {
            $accommodation = Accomodations::find($id);
            $room = \App\accommo_room::find($room_id);

            $room->room_type = $request->room_type;
            $room->short_description = $request->short_description;
            $room->description = $request->description;
            $room->no_adult = $request->no_adult;
            $room->price_adult = $request->price_adult;
            $room->no_children = $request->no_children;
            $room->price_child = $request->price_child;
            $room->save();

            $url = 'admin/accommodations/rooms/' . $id ; 
            return redirect($url)->with('alert-success', 'Successfully edited the room');
        });
    });
    
});

Route::group(['prefix' => 'user'], function () {
    //Admin Routes
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            $users = \App\Admin::all();
            return view('admin.user.admin.all', compact('users'));
        });
    });

    //Extranet
    Route::group(['prefix' => 'extranet'], function () {
        Route::get('/', function () {
            $users = \App\Extranet::all();
            return view('admin.user.extranet.all', compact('users'));
        });
    });
    
    //Customer Routes
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', function () {
            $users = \App\User::all();
            return view('admin.user.customers.all', compact('users'));
        });
    });
    
    //Dive Users
    Route::group(['prefix' => 'dive'], function () {
        Route::get('/', function () {
            $users = \App\User::all();
            return view('admin.user.dive.all', compact('users'));
        });
    });

    //Photo Users
    Route::group(['prefix' => 'photo'], function () {
        Route::get('/', function () {
            $users = \App\User::all();
            return view('admin.user.photo.all', compact('users'));
        });
    });
});

Route::group(['prefix' => 'tours'], function () {
    Route::get('/', function () {
        $tours = \App\tour::all();
        return view('tours.view', compact('tours'));
    });
    Route::get('/add', 'TourController@create');
    Route::post('/add', 'TourController@store');
    Route::get('/delete/{slug}', 'TourController@destroy');
    
    Route::group(['prefix' => 'edit'], function () {
        Route::get('/{slug}', 'TourController@edit');
        Route::post('/{slug}', 'TourController@update');
        
        Route::get('/{slug}/{tours_photo}/main', 'ToursPhotoController@main');
        Route::get('/{slug}/{tours_photo}/delete', 'ToursPhotoController@destroy');
    });


});

Route::get('/testone', function () {
    $type = env('UPLOAD_TYPE', 'public');
    return $type;

});

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', function () {
        $blogs = \App\blog::all();
        return view('blog.view', compact('blogs'));
    });
    Route::get('/create', function () {
        return view('blog.create');
    }); 
    Route::post('/create', 'BlogController@store');

    Route::get('/delete/{id}', function ($id) {
        $blog = \App\blog::find($id);
        $blog->delete();
        return redirect('admin/blog')->with('alert-success', 'Successfully deleted the blog post');
    });
    
    Route::get('/edit/{id}', function ($id) {
        $blog = \App\blog::find($id);
        return view('blog.edit', compact('blog'));
    });
    Route::post('/edit/{id}', function ($id, Request $request) {
        $blog = \App\blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->save();
        return redirect('admin/blog')->with('alert-success', 'Successfully edited the blog');
    });
});

Route::group(['prefix' => 'bookings'], function () {
    Route::group(['prefix' => 'accommodations'], function () {
        Route::get('/', function () {
            $bookings = \App\booking::all();
            return view('bookings.view', compact('bookings'));
        }); 
    });
    Route::group(['prefix' => 'tours'], function () {
        Route::get('/', function () {
            $bookings = \App\booking::all();
            return view('bookings.view', compact('bookings'));
        }); 
    });
});

Route::group(['prefix' => 'inquiries'], function () {
    Route::get('/', function () {
        $inquiries = \App\inquery::all();
        return view('inquery.view', compact('inquiries'));
    }); 
    Route::get('/{$id}', function ($id) {
        $inquiry = \App\inquery::findorfail($id);
        return view('inquery.viewa', compact('inquiry'));
    }); 
});

Route::group(['prefix' => 'gallery'], function () {
    Route::get('/', function () {
        $gallery_images = \App\Gallery::all();        
        return view('admin.gallery.create', compact('gallery_images'));
    });
    Route::post('/post', function (Request $request) {                
        foreach ($request->image as $photo) {
            //File names and location
            $fileName = 'gallery' . '-' . time() . '-' . $photo->getClientOriginalName();
            $location_o = 'gallery'.'/original'.'/'.$fileName;
            $location_t = 'gallery'.'/thumbnail'.'/'.$fileName;
            
            $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));

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

            \App\Gallery::create([
                'photo_url' => $location_o,
                'thumbnail' => $location_t,
            ]);
        }
        return redirect()->back()->with('alert-success', 'Successfully added new image(s)');
    }); 
    Route::get('/{id}/delete', function ($id) {
        $photo = \App\Gallery::find($id);
        if ($photo !== null) {
            $photo->delete();
            return redirect()->back()->with('alert-success', 'Successfully deleted the image');
        } else {
            return redirect('admin/gallery')->with('alert-danger', 'Image not found');
        }
        
    });
});

Route::group(['prefix' => 'facilities'], function () {
    Route::get('/', function () {
        $facilities = \App\facilities::all();
        return view('admin.facilities.index', compact('facilities'));
    });
    Route::get('/add', function () {
        return view('admin.facilities.create');
    });
    Route::post('/add', function () {
        $facility = \App\facilities::create(Input::except('_token'));
        return redirect('admin/facilities')->with('alert-success', 'Successfully added new facility');
    });
    Route::get('/edit/{id}', function ($id) {
        $facility = \App\facilities::find($id);
        return view('admin.facilities.edit', compact('facility'));
    });
    Route::post('/edit/{id}', function ($id, Request $request) {
        $facility = \App\facilities::find($id);
        $facility->name = $request->name;
        $facility->fa_icon = $request->fa_icon;
        $facility->save();
        return redirect('admin/facilities')->with('alert-success', 'Successfully edited the facility');
    });
    Route::get('/delete/{id}', function ($id) {
        $facility = \App\facilities::find($id);
        $facility->delete();
        return redirect()->back()->with('alert-success', 'Successfully deleted the facility');
    });
});

Route::group(['prefix' => 'settings'], function () {
    Route::get('/', function () {
        $settings = \App\settings::find('1');
        //dd($settings);
        $categories = explode(',', $settings->categories);
        return view('admin.settings.index', compact('settings', 'categories'));
    });
    Route::post('/', function (Request $request) {
        $settings = \App\settings::find('1');
        $settings->categories = $request->categories;
        $settings->save();
        //dd($settings);
        return redirect('admin/settings')->with('alert-success', 'Successfully saved changes');
    });
});

Route::group(['prefix' => 'top-picks'], function () {
    Route::get('/', function () {
        $accommodations = Accomodations::all();
        return view('admin.topPicks.all', compact('accommodations'));
    });

    Route::get('/{id}/top', function ($id) {
        $accommodation = Accomodations::find($id);
        
        if ($accommodation !== null) {

            if ($accommodation->top_acco == '0' OR $accommodation->top_acco == 0 OR $accommodation->top_acco == null) {
                $accommodation->top_acco = '1';
                $accommodation->save();
            }

            if ($accommodation->top_acco == '1') {
                $accommodation->top_acco = '0';
                $accommodation->save();
            }

            return redirect('admin/top-picks')->with('alert-success', 'Successfully added the accommodation to Top Accommodation');
        } else {
            return redirect('admin/top-picks')->with('alert-warning', 'Accommodation not found');
        }
        
    });

    Route::get('/{id}/top/0', function ($id) {
        $accommodation = Accomodations::find($id);
        
        if ($accommodation !== null) {
            $accommodation->top_acco = '0';
            $accommodation->save();

            return redirect('admin/top-picks')->with('alert-success', 'Successfully removed from Top Accommodation');
        } else {
            return redirect('admin/top-picks')->with('alert-warning', 'Accommodation not found');
        }
        
    });
    Route::get('/{id}/top/1', function ($id) {
        $accommodation = Accomodations::find($id);
        
        if ($accommodation !== null) {
            $accommodation->top_acco = '1';
            $accommodation->save();

            return redirect('admin/top-picks')->with('alert-success', 'Successfully added to Top Accommodation');
        } else {
            return redirect('admin/top-picks')->with('alert-warning', 'Accommodation not found');
        }
        
    });
});

Route::group(['prefix' => 'bills'], function () {
    Route::get('/', function () {
        $bills = \App\Bills::all();
        return view('admin.bills.all', compact('bills'));
    });

    Route::get('/create', function (Request $request) {
        if (request()->create == 'athikonly') {
            return view('admin.bills.create');
        } else {
            abort(404);
        }
    });

    Route::post('/create', function (Request $request) {
        $bill = \App\Bills::create(Input::except('_token', 'pdf_link'));

        $pdf = $request->file('pdf_link');

        $fileName = time() . '-' . $pdf->getClientOriginalName();
        $location = 'bills/'.$fileName;

        $s3 = \Storage::disk('s3');
        $s3->put($location, file_get_contents($pdf), 'public');
        
        $bill->pdf_link = $location;
        $bill->save();
        
        return redirect()->back()->with('alert-success', 'Successfully added new bill');
    });
});


Route::group(['prefix' => 'about-us'], function () {
    Route::get('/create', function () {
        $about = AboutUs::find(1);
        return view('about.admin.create', compact('about'));
    });
    Route::post('/create', function (Request $request) {
        $about = AboutUs::find(1);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->save();
        return redirect('admin/about-us/create');
    });
});