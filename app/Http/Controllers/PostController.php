<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index() 
    {
    	return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function create(Post $post) 
    {
        return view('posts.create', compact('post'));
    }

    public function store(Request $request) 
    {
    	$request->validate([
    		'title' => 'required',
    		'body'  => 'required'
    	]);

        $post = $request->user()->posts()->create([
            'title' => $title = $request->title,
            'slug'  => Str::slug($title),
            'body'  => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }

    public function edit(Post $post) 
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
    	$request->validate([
    		'title' => 'required',
    		'body'  => 'required'
    	]);

        $post->update([
            'title' => $title = $request->title,
            'slug'  => Str::slug($title),
            'body'  => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }

    public function destroy(Post $post) 
    {
        $post->delete();

        return back();
    }
}
