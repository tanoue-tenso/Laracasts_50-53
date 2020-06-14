@foreach ($conversation->replies as $reply)
    <div class="m-0">
        <p><strong>{{ $reply->user->name }} said...</strong></p>

        {{ $reply->body }}

        {{-- memo: AuthServiceProviderに登録したように、$conversationの投稿者がログインユーザーのもののみ表示 --}}
        @can('update-conversation', $conversation)
            <form action="/best-replies/{{ $reply->id }}" method="POST">
                @csrf
                <button type="submit" class="btn p-0 text-muted">Best Reply?</button>
            </form>
        @endcan
    </div>

    @continue($loop->last)
    <hr>
@endforeach
