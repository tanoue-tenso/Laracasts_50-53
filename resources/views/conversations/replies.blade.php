@foreach ($conversation->replies as $reply)
    <div>
        <header style="display: flex; justify-content: space-between; ">
            <p class="m-0"><strong>{{ $reply->user->name }} said ...</strong></p>

            @if ($reply->isBest())
                <span style="color: green;">Best Reply!!</span>
            @endif
        </header>
        {{ $reply->body }}


        {{-- memo: AuthServiceProviderに登録したように、$conversationの投稿者がログインユーザーのもののみ表示 --}}
        @can('update', $conversation)
        <form action="/best-replies/{{ $reply->id }}" method="POST">
            @csrf
            <button type="submit" class="btn p-0 text-muted">Best Reply?</button>
        </form>
        @endcan

    </div>

    @continue($loop->last)
    <hr>
@endforeach
