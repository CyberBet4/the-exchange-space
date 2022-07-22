@component('mail::message')
# {{ $user->name }} has requested a withdraw.

Information details:
{{ $user->name }} 
({{ $user->email }})

Withdraw request:
{{ $user->name }} initiated a withdraw of {{ $amount }} ({{ $wallet }}) <br>

To (User wallet): ({{ $newwallet }}) {{ $address }}
<br>
Go to {{ config('app.name') }} to fulfill this request.
@component('mail::button', ['url' => route('user-list')])
View in dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
