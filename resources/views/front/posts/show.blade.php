@extends('layouts.app')

@section('page-title', $post->title . ' | Laravel Blog')

@section('content')
<div class="container">
    <article id="article-{{ $post->id }}" class="card mb-5">
        <div class="card-body">
            <header class="mb-3">
                <h2 class="card-title">{{ $loop->iteration ?? null }} {{ $post->title }}</h2>
                <p class="card-subtitle post-meta text-secondary">
                    Ditulis pada <time class="post-datetime" datetime="{{ $post->created_at->toIso8601String() }}">{{ $post->created_at->locale('id_ID')->isoFormat('LLLL') }}</time> oleh <span class="post-author">{{ $post->author->name }}</span>
                </p>
            </header>
            {{ $post->content }}
        </div>
    </article>
</div>
@endsection
