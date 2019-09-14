@extends('layouts.app')

@section('page-title', 'Edit Post | Laravel Blog Admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-start">
                    <h2 class="mr-3">Edit Post</h2>
                    <a class="btn btn-primary btn-lg px-2 py-1 align-self-start" href="{{ url()->previous() }}" role="button">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.posts.update', [ 'post' => $post->slug ]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" name="title" id="post-title" class="form-control form-control-lg" placeholder="Insert title here..." value="{{ $post->title }}">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="content" id="post-content" rows="6" placeholder="Insert content here...">{{ $post->content }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
