@extends ('layouts.app')

@section ('content')
    <p>
        <a href="/conversation">Back</a>
    </p>
    <h1>{{ $conversation->title }}</h1>
    <p>Posted by: {{ $conversation->user->name }}</p>
    <div>{{ $conversation->body }}</div>
    <hr>

    @include ('conversation.replies')

@endsection