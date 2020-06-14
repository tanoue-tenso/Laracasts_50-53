@extends('layouts.app')

@section('content')
    <div style="width: 80%; margin: auto;">
        <p><a href="{{ route('conversations.index') }}">Back</a></p>

        <h1>{{ $conversation->title }}</h1>

        <p class="text-muted">Posted by {{ $conversation->user->name }}</p>

        <div>{{ $conversation->body }}</div>

        <hr>

        @include('conversations.replies')
    </div>

@endsection
