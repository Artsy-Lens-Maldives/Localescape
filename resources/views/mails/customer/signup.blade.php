@component('mail::message')
# Welcome to {{ config('app.name') }}

Hi {{ $user->name }}
Thanks so much for joining us.

@component('mail::promotion')
Coupon Code for Discounts upto 60% : WD2D 3NF3 NR3W 2RDC
@endcomponent

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
