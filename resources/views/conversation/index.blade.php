@extends ('layouts.app')

@section ('content')
    @foreach ($conversations as $conversation)
        <h2><a href="/conversation/{{ $conversation -> id }}">{{ $conversation -> title }}</a></h2>

        @continue($loop->last)

        <hr>
    @endforeach
@endsection