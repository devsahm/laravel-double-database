@component('mail::message')
# Referral Code

Your African Money Agent Referral code is <b>{{ $agent->referal_code }}</b>.  

@component('mail::button', ['url' => '/home'])
Home Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
