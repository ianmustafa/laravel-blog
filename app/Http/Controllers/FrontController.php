<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->get();

        return view('front.posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('front.posts.show', compact('post'));
    }
}
