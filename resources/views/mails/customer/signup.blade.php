@component('mail::message')
# Welcome to {{ config('app.name') }}

Hi {{ $user->name }}

Greetings from Local Escape.Thanks so much for joining us here.

If you have any questions do not hesitate to Mail us at info@localescapemaldives.com.Our agents then will reply within 24hrs.

@component('mail::button', ['url' => 'localescapemaldives.com/extranet/profile'])
Complete Your Profile
@endcomponent

Thanks,<br>
Ahmed Nilsham (CEO)
@endcomponent
