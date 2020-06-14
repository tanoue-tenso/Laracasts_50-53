@foreach ($conversation->replies as $reply)
    <div class="m-0">
        <p><strong>{{ $reply->user->name }} said...</strong></p>

        {{ $reply->body }}

        <form action="">
            <button type="submit" class="btn p-0 text-muted">Best Reply?</button>
        </form>
    </div>

    @continue($loop->last)
    <hr>
@endforeach
