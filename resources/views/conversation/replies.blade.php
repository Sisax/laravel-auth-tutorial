@foreach ($conversation->replies as $reply)
    <div>
        <header style="display: flex; justify-content: space-between;">
            <p><strong>{{ $reply->user->name }} said...</strong></p>

            @if ($conversation->best_reply_id === $reply->id)
                <p style="color: green;">Best reply!</p>
            @endif
        </header>
        <p>{{ $reply->body }}</p>

        @if ($conversation->best_reply_id !== $reply->id)
        @can ('update', $conversation)
        <form action="/best-replies/{{ $reply->id }}" method="POST">
            @csrf
            <button type="submit">Best reply?</button>
        </form>
        @endcan
        @endif
    </div>

    @continue($loop->last)

    <hr>
@endforeach