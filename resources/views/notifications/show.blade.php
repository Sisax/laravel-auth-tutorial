@extends('layouts.app')

@section('content')

<p>show all notifications</p>

<ul>
@forelse($notifications as $notification)
    @if ($notification->type === 'App\Notifications\PaymentRecieved')
        <li>We have recieved a payment of {{ $notification->data['amount'] }} from you</li>
    @endif
@empty
    <li>You have no unread notifications</li>
@endforelse
</ul>
@endsection
