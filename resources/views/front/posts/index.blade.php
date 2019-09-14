@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <article id="article-{{ $post->id }}" class="card mb-4">
        <div class="card-body">
            <header class="mb-3">
                <h2 class="card-title">
                    <a href="{{ route('posts.show', [ 'post' => $post->slug ]) }}">{{ $post->title }}</a>
                </h2>
                <p class="card-subtitle post-meta text-secondary">
                    Ditulis pada <time class="post-datetime" datetime="{{ $post->created_at->toIso8601String() }}">{{ $post->created_at->locale('id_ID')->isoFormat('LLLL') }}</time> oleh <span class="post-author">{{ $post->author->name }}</span>
                </p>
            </header>
            {{ $post->content }}
        </div>
    </article>
    @endforeach
</div>
@endsection
