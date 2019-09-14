@extends('layouts.app')

@section('page-title', 'All Posts | Laravel Blog Admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-start">
                    <h2 class="mr-3">All Posts</h2>
                    <a class="btn btn-primary btn-lg px-2 py-1 align-self-start" href="{{ route('admin.posts.create') }}" role="button">Create new post</a>
                </div>

                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->author->name }}</td>
                                    <td>
                                        <a class="btn btn-primary px-2 py-1" href="{{ route('admin.posts.edit', [ 'post' => $post->slug ]) }}" role="button">
                                            Edit
                                        </a>

                                        <form class="form-inline d-inline" action="{{ route('admin.posts.delete', [ 'post' => $post->slug ]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger px-2 py-1">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
