<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
    	return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function create() 
    {
        return view('posts.create');
    }

    public function edit(Post $post) 
    {
        return view('posts.edit', compact('post'));
    }

    public function destroy(Post $post) 
    {
        $post->delete();

        return back();
    }
}
