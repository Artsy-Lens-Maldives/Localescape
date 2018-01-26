@component('mail::message')
# Hey Customer,

We have recieved a booking request on Local Escape Boutique -Delexue Room on (today's date 21.05.2018).You will see the booking details below 

@component('mail::table')
| Accomodation Details      |  Price  |
| ------------- |:---------:|
| Local Escape Boutique - Deluxe Room       |  $1000      |
| Tax (12%)      |  $120  |
| Total      |  $1120  |
@endcomponent

@component('mail::panel')
Chech In = 21.05.2018	
Checkout = 25.06.2019	
Email: imperialaeiou@gmail.com	
Contact: +9607779423
@endcomponent
Our Agents will send you a booking confirmation as soon as possible.

@component('mail::button', ['url' => ''])
View Booking
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
