@extends('layouts.extranet')

@section('content')
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Extranet</a></li>
                <li class="active">Accommodations</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1><a href="#">My Accommodations</a></h1>
                </div>
                <div class="my-items table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Accommodation</th>
                            <th>Featured</th>
                            <th>Views</th>
                            <th>Reviews</th>
                            <th>Rating</th>
                            <th>Last Booking</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="my-item">
                            <td>
                                <div class="image-wrapper">
                                    <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="Top accommodation"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="{{ url('extranet/accommodations/edit') }}" class="image">
                                        <div class="bg-transfer">
                                            <img src="/assets/img/items/01.jpg">
                                        </div>
                                    </a>
                                </div>
                                <div class="info">
                                    <a href="/hotels/detail"><h2>Accommodation 1</h2></a>
                                    <figure class="location">Location</figure>
                                    <figure class="label label-info">Hotel</figure>
                                    <div class="meta">
                                        <span><i class="fa fa-bed"></i>365</span>
                                        <span class="price-info">From <span class="price">$32</span><span class="appendix">/night</span></span>
                                    </div>
                                    <!--end meta-->
                                </div>
                                <!--end info-->
                            </td>
                            <td><div class="featured yes"><i class="fa fa-check"></i><aside></aside></div></td>
                            <td class="views">426</td>
                            <td class="reviews">45</td>
                            <td class="rating">9.3</td>
                            <td class="last-reservation">Today 15:32
                                <span class="last-edit">Last edited: Today 12:35</span>
                                <div class="edit-options">
                                    <a href="{{ url('extranet/accommodations/edit') }}" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                    <a href="{{ url('extranet/accommodations/bookings') }}" class="link icon"><i class="fa fa-check-square-o"></i>Bookings</a>
                                    <a href="{{ url('extranet/accommodations/reviews') }}" class="link icon"><i class="fa fa-comment"></i>Reviews</a>
                                    <a href="#" class="link icon delete"><i class="fa fa-trash"></i>Delete</a>
                                </div>
                                <!--end edit-options-->
                            </td>
                        </tr>
                        <!--end my-item-->
                        </tbody>
                    </table>
                </div>
                <!--end my-items-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->    
@endsection