@extends('layouts.app')

@section('content')
<form action="/payments" method="POST">
    @csrf
    <button type="submit">Make Payment</button>
</form>
@endsection
