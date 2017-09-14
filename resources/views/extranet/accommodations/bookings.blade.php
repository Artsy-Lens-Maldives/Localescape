@extends('layouts.extranet')

@section('content')
    
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Listing</a></li>
                <li class="active">Detail</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1 class="inactive"><a href="{{ url('extranet/accommodations/edit') }}">Edit Accommodation</a></h1>
                    <h1><a href="{{ url('extranet/accommodations/bookings') }}">Bookings</a></h1>
                    <h1 class="inactive"><a href="{{ url('extranet/accommodations/reviews') }}">Reviews</a></h1>
                </div>
                <!--end title-->
                <div class="info">
                    <strong>Accommodation:</strong>
                    <h2 class="no-margin"><a href="detail">Spring Hotel</a></h2>
                    <hr>
                </div>
                <!--end info-->
                <div class="reservations table-responsive">
                    <table class="table table-fixed-header">
                        <thead class="header">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Nights</th>
                            <th>Room Type</th>
                            <th># of Rooms</th>
                            <th>Adults</th>
                            <th>Children</th>
                            <th>Pets</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Confirmed</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="reservation">
                            <td>1583<span class="new" data-toggle="tooltip" data-placement="right" title="New"></span></td>
                            <td>Deo, John</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Apartment</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$233</td>
                            <td>40%</td>
                            <td><span class="circle check"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1580<span class="new" data-toggle="tooltip" data-placement="right" title="New"></span></td>
                            <td>Brown, Cat...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Family Room</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$480</td>
                            <td>20%</td>
                            <td><span class="circle check"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1588<span class="new" data-toggle="tooltip" data-placement="right" title="New"></span></td>
                            <td>Berkshire, J...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Junior Suite</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$480</td>
                            <td>20%</td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1600</td>
                            <td>Doe, Suzan...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Family Room</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$1.500</td>
                            <td></td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1583</td>
                            <td>Deo, John</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Apartment</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$233</td>
                            <td>40%</td>
                            <td><span class="circle check"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1580</td>
                            <td>Brown, Cat...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Family Room</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$480</td>
                            <td>20%</td>
                            <td><span class="circle check"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1588</td>
                            <td>Berkshire, J...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Junior Suite</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$480</td>
                            <td>20%</td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1600</td>
                            <td>Doe, Suzan...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Family Room</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$1.500</td>
                            <td></td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1583</td>
                            <td>Deo, John</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Apartment</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$233</td>
                            <td>40%</td>
                            <td><span class="circle check"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1580</td>
                            <td>Brown, Cat...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Family Room</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$480</td>
                            <td>20%</td>
                            <td><span class="circle check"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1588</td>
                            <td>Berkshire, J...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Junior Suite</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$480</td>
                            <td>20%</td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1600</td>
                            <td>Doe, Suzan...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Family Room</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$1.500</td>
                            <td></td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1588</td>
                            <td>Berkshire, J...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Junior Suite</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$480</td>
                            <td>20%</td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1600</td>
                            <td>Doe, Suzan...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Family Room</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$1.500</td>
                            <td></td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1588</td>
                            <td>Berkshire, J...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Junior Suite</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$480</td>
                            <td>20%</td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1600</td>
                            <td>Doe, Suzan...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Family Room</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$1.500</td>
                            <td></td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1588</td>
                            <td>Berkshire, J...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Junior Suite</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$480</td>
                            <td>20%</td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        <tr class="reservation">
                            <td>1600</td>
                            <td>Doe, Suzan...</td>
                            <td>12.03.2016</td>
                            <td>15.03.2016</td>
                            <td>2</td>
                            <td>Family Room</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>$1.500</td>
                            <td></td>
                            <td><span class="circle"></span></td>
                        </tr>
                        <!--end reservation-->
                        </tbody>
                    </table>
                </div>
                <!--end reservations-->
                <div class="center">
                    <ul class="pagination">
                        <li class="prev">
                            <a href="#"><i class="arrow_left"></i></a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="next">
                            <a href="#"><i class="arrow_right"></i></a>
                        </li>
                    </ul>
                    <!-- end pagination-->
                </div>
                <!-- end center-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->    

@endsection