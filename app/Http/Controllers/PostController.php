<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::allPosts();
        return view('post.index', compact('posts'));
    }
}
