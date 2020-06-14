@extends('layouts.app')

@section('content')
<div style="width: 80%; margin: auto;">
    @foreach ($conversations as $conversation)
        <h2><a href="{{ route('conversations.show', ['conversation' => $conversation]) }}">{{ $conversation->title }}</a></h2>

        {{-- ループが最後のときにhrを非表示 --}}
        @continue($loop->last)

        <hr>

    @endforeach
</div>
@endsection
