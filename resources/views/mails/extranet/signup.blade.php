@component('mail::message')
# Welcome to {{ config('app.name') }}

Hi {{ $user->name }}

Thanks so much for joining our extranet.If you have any questions do not hesitate to Mail us at info@localescapemaldives.com

@component('mail::button', ['url' => 'localescapemaldives.com/extranet/profile'])
Complete Your Profile
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
