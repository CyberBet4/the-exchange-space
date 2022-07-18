@component('mail::message')
# {{ $user->name }} has requested a deposit.

Information details:
{{ $user->name }} 
({{ $user->email }})

Deposit request:
{{ $user->name }} made a deposit of {{ $amount }} ({{ $coin }}) to {{ $cointype }}:
# {{ $user->wallet }} <br>

To be swapped to (User preferred wallet): {{ $usercoin}}

@component('mail::button', ['url' => route('user-list')])
View in dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
