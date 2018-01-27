@component('mail::message')
# Welcome to {{ config('app.name') }}

Hi {{ $user->name }}
Thanks so much for joining extranet.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
