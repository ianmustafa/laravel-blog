@extends('layouts.app')

@section('page-title', 'Create New Post | Laravel Blog Admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-start">
                    <h2 class="mr-3">Create New Post</h2>
                    <a class="btn btn-primary btn-lg px-2 py-1 align-self-start" href="{{ url()->previous() }}" role="button">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.posts.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" id="post-title" class="form-control  form-control-lg" placeholder="Insert title here...">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="content" id="post-content" rows="6" placeholder="Insert content here..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
