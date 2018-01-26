@component('mail::message')
# Hey Customer,

We have recieved a booking request on Local Escape Boutique -Delexue Room on (today's date 21.05.2018).You will see the booking details below 

@component('mail::table')
| Accomodation Details      |  Price  |
| ------------- |:---------:|
| Local Escape Boutique - Deluxe Room ( Chech In = 21.05.2018 and Checkout = 25.06.2019 )       |  $1000      |
@endcomponent

@component('mail::panel')
Our Agents will send you a booking confirmation as soon as possible.
@endcomponent

@component('mail::button', ['url' => ''])
View Booking
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
