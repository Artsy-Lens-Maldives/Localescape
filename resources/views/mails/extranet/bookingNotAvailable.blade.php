<?php
$tax = round( $booking->price  * 12/112 ,2 )
?>

@component('mail::message')
# Hey {{ $booking->room->accommodation->extranet->name }} ,

The booking request on {{ $booking->room->accommodation->title }} - {{ $booking->room->room_type }} on  {{ $booking->created_at->toFormattedDateString() }} is rejected by {{ $booking->room->accommodation->title }} .You will see the booking details below 

@component('mail::table')
| Accomodation Details      |  Price  |
| ------------- |:---------:|
| {{ $booking->room->accommodation->title }} - {{ $booking->room->room_type }}       |  {{ $booking->price - $tax }}     |
| Tax (12%)      |  {{ round( $booking->price  * 12/112 ,2 ) }} |
| Total      |  {{ $booking->price }} |
@endcomponent

@component('mail::panel')
Chech In = {{ $booking->checkin }}	
Checkout = {{ $booking->checkout }}	
Email: {{ $booking->email }}	
Contact: {{ $booking->user->phone }}
@endcomponent 

@component('mail::button', ['url' => 'localescapemaldives.com/extranet/bookings'])
View Booking
@endcomponent

If you would like you can approve this again from your extranet panel.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
